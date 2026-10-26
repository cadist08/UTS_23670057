<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class CourseController extends Controller
{
    public function index(): View
    {
        return view('landing.course');
    }
}
