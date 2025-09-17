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

    public function english()
    {
        return  view('english');
    }


    public function submission(Request $request)
    {
        dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'phone_number' => [
                'required',
                'regex:/^966\d{9}$/'
            ],
        ]);
        if ($request->category != null) {

            $category = Category::find($request->category);
        } else {
            $category = null;
        }

        Submission::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'city' => $request->city == 'other' ? $request->other_city : $request->city,
            'category' => $category->name,
            'course' => json_encode($request->course),
            'about_sae' => $request->hear

        ]);

        return redirect()->route('index')->with('success', 'thanks for your submission');
    }
}
