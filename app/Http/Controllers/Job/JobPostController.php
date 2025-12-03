<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobPost;
use App\Models\JobCategory;
use App\Models\JobRole;
use App\Models\User;

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jobcategories = JobCategory::where('status', 1)->get();
        $jobroles = JobRole::where('status', 1)->get();
        $users = User::get();
        return view('admin.job.jobpost', compact('jobcategories', 'jobroles', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. VALIDATION
        $request->validate([
            'company_name' => 'required|string|max:255',
            // Optional validations
            'company_logo' => 'nullable|image|mimes:jpg,jpeg,png|max:800',
            'contact_email' => 'nullable|email',
            'contact_phone' => 'nullable|string|max:20',
            'website' => 'nullable|string|max:255',

            'salary_min' => 'nullable|numeric',
            'salary_max' => 'nullable|numeric',

            'education' => 'nullable|array',
            'experience' => 'nullable|array',

            'application_deadline' => 'nullable|date',
            'vacancies' => 'nullable|integer',
        ]);

        // 2. FILE UPLOAD (Company Logo)
        $companyLogoPath = null;
        if ($request->hasFile('company_logo')) {
            $companyLogoPath = $request->file('company_logo')->store('company_logos', 'public');
        }

        // 3. SAVE JOB POST
        $job = new JobPost();
        $job->company_name = $request->company_name;
        $job->designation_id = $request->designation_id;
        $job->job_role_id = $request->job_role_id;
        $job->job_type = $request->job_type;
        $job->work_location_type = $request->work_location_type;
        $job->pay_type = $request->pay_type;

        // Salary
        $job->salary_min = $request->salary_min;
        $job->salary_max = $request->salary_max;

        // Contact Info
        $job->contact_email = $request->contact_email;
        $job->contact_phone = $request->contact_phone;
        $job->website = $request->website;

        // Logo
        $job->company_logo = $companyLogoPath;

        // Candidate Requirements
        $job->education = $request->education ? json_encode($request->education) : null;
        $job->experience = $request->experience ? json_encode($request->experience) : null;

        $job->age_min = $request->age_min;
        $job->age_max = $request->age_max;
        $job->job_description = $request->job_description;

        // Address
        $job->address = $request->address;
        $job->country = $request->country;
        $job->state = $request->state;
        $job->zipcode = $request->zipcode;

        // Other Information
        $job->application_deadline = $request->application_deadline;
        $job->vacancies = $request->vacancies;
        $job->status = $request->status ?? 1;

        // Assigned who posted (user)
        $job->jobposted_by = $request->jobposted_by;

        // Save record
        $job->save();

        return redirect()->back()->with('success', 'Job Posted Successfully!');
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
