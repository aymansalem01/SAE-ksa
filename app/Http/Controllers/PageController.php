<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Submission;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {

        return view('welcome');
    }

    // public function course(string $id)
    // {
    //     $category = Category::find($id);
    //     $courses = Course::where('category_id', $id)->get();
    //     return view('course', ['category' => $category, 'courses' => $courses]);
    // }

    // public function form(string $id)
    // {
    //     $selected = Course::find($id);
    //     $courses = Course::where('category_id', $selected->category_id)->get();

    //     return view('form', ['selected' => $selected, 'courses' => $courses]);
    // }

    public function submission(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'city' => 'required',
            'category' => 'required',
            'course' => 'required',
        ]);
        $category = Category::find($request->category);
        
        Submission::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'city' => $request->city,
            'category' => $category->name,
            'course' => json_encode($request->course)
        ]);

        return redirect()->route('index', ['success' => 'Thank you for your submission!']);
    }
}
