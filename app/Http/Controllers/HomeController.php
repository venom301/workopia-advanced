<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\job;
class HomeController extends Controller
{
    public function index()
    {
        //load part of the jobs page
        $jobs = Job::latest()->limit(6)->get();

        return view('pages.index')->with('jobs', $jobs);
    }
}
