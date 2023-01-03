<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        return view('course', [
            'title' => 'Course'
        ]);
    }

    public function displayCourseDetail(){
        return view('course-detail', [
            'title' => 'Course Detail'
        ]);
    }
}
