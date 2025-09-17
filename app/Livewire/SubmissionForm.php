<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;
use App\Models\Category;




class SubmissionForm extends Component
{
    public $categories , $courses   = [];

    public $name , $email , $phone_number , $city , $category , $hear;

    public $course = [];

    public function render()
    {
        return view('livewire.submission-form');
    }
    public function mount()
    {
        $this->categories = Category::all();

    }


    public function updatedCategory()
    {
        if ($this->category == 'all_of_them') {
            $this->courses = Course::get();
        }
        else {
            $this->courses = Course::where('category_id', $this->category)->get();
        }
    }
}
