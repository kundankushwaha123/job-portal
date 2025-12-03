<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\JobRole;
use App\Models\JobCategory;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Str;

class JobRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobroles = JobRole::with('jobCategory')->get();
        $jobcategories = JobCategory::where('status', 1)->get();

        return view('admin.job.job-role', compact('jobroles', 'jobcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'Required|string|max:255',
            'job_category_id' => 'Required|exists:job_categories,id',
        ]);
        // dd($request->all());
        JobRole::create([
            'name' => $request->name,
            'job_category_id' => $request->job_category_id,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'status' => $request->status,
        ]);
        return redirect()->back()->with('success', 'Job Role Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
