<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\JobRole;
use App\Models\JobCategory;

use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Str;


class JobCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobcategories = JobCategory::get();

        return view('admin.job.job-category', compact('jobcategories'));
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
            'name' => 'Required|string|max:255|unique:job_categories,name',
        ]);

        JobCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'status' => $request->status,
        ]);
        return redirect()->back()->with('success', 'Job Category Created Successfully');
        // JobRole::create([
        //     'name' => $request->name,
        //     'job_category_id' => $request->job_category_id,
        // ]);
        //

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
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:job_categories,name,' . $id,
        ]);
        
        $jobcategory = JobCategory::findOrFail($id);
        
        $jobcategory->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'status' => $request->status,
        ]);       

        return redirect()->back()->with('success', 'Job Category Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jobcategory = JobCategory::findOrFail($id);
        $jobcategory->delete();
        return redirect()->back()->with('success', 'Job Category Deleted Successfully');
        //
    }
}
