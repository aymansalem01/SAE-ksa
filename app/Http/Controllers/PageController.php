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
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
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
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'city' => $request->city == 'other' ? $request->other_city : $request->city,
            'category' => $request->category === 'all_of_them'
                ? 'all of them'
                : ($category->name_en ?? null),
            'course' => json_encode($request->course) || null,
            'message' => $request->message
        ]);
        return redirect()->back()->with('success', 'thanks for your submission');
    }
}
