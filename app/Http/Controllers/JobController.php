<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = job::all();

        return view('jobs.index')->with('jobs', $jobs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //getting data from request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'salary' => 'required|integer',
            'tags' => 'nullable|string',
            'job_type' => 'required|string',
            'remote' => 'required|boolean',
            'requirements' => 'nullable|string',
            'benefits' => 'nullable|string',
            'address' => 'nullable|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zipcode' => 'nullable|string',
            'contact_email' => 'required|string',
            'contact_phone' => 'nullable|string',
            'company_name' => 'required|string',
            'company_description' => 'nullable|string',
            'company_logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'company_website' => 'nullable|url',
        ]);

        //hardcoded uder_id

        $validated['user_id'] = 1;

        //submit to database
        Job::create($validated);

        //check for image
        if($request->hasFile('company_logo')){
            //store file and get path
            $path = $request->file('company_logo')->store('logos', 'public');

            //add path to validated data(database)
            $validated['company_logo'] = $path;
        }

        //redirect to jobs page
        return redirect()->route('jobs.index')->with('success', 'job listing created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(job $job)
    {
        return view('jobs.show')->with('job', $job);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
