<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    protected $casts = [
        'education' => 'array',
        'experience' => 'array',
        'application_deadline' => 'date',
    ];

    // protected $fillable = [
    //     'company_name',
    //     'company_logo',
    //     'contact_email',
    //     'contact_phone',
    //     'website',
    //     'job_category_id',
    //     'job_role_id',
    //     'jobposted_by',
    //     'job_title',
    //     'job_description',
    //     'location',
    //     'salary_min',
    //     'salary_max',
    //     'education',
    //     'experience',
    //     'application_deadline',
    //     'vacancies',
    //     'status',
    // ];

    public function jobCategory()
    {
        return $this->belongsTo(JobCategory::class, 'job_category_id');
    }
    public function jobRole()
    {
        return $this->belongsTo(JobRole::class, 'job_role_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'jobposted_by');
    }
}
