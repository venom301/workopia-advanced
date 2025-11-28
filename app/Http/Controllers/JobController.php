<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $title = 'Available jobs';
        $jobs = ['Web development', 'Graphic design', 'Content writing'];

        return view('jobs.index', compact('title', 'jobs'));
    }

    public function create(){
        return view('jobs.create');
    }
}
