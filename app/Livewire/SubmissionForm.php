<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;
use App\Models\Category;




class SubmissionForm extends Component
{
    public $categories , $courses   = [];

    public $name , $email , $phone_number , $city , $category;

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
        $this->courses = Course::where('category_id', $this->category)->get();
    }
}
