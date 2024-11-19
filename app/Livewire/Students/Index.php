<?php
namespace App\Livewire\Students;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Student;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
class Index extends Component
{

    public $search;

    use WithPagination, WithoutUrlPagination;
    #[Layout('layouts.app')]
    public function render()
    {

        $query = Student::query();
        $query = $this->applySearch($query);
        return view('livewire.students.index', [
             'students' => $query->paginate(10)
        ]);
    }

    public function delete(Student $student)
    {
         $student->delete();
         flash()->info("Student Deleted successfully!");
    }

    public function applySearch(Builder $query)
    {
        return $query->where('name', 'like', '%' . $this->search . '%');
                    OrWhere('email', 'like', '%' . $this->search . '%');
    }
}