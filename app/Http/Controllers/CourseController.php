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

    public function displayCourseCheckout(){
        return view('course-checkout', [
            'title' => 'Course Checkout'
        ]);
    }

    public function displayCoursePayment(){
        return view('course-payment', [
            'title' => 'Course Payment'
        ]);
    }

    public function displayCourseSuccess(){
        return view('course-success', [
            'title' => 'Course Checkout Successful'
        ]);
    }
}
