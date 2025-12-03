<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobrole extends Model
{
    //
    protected $casts = [
        'job_category_id' => 'integer',
        'status' => 'boolean',
        
    ];
    protected $fillable = [
        'job_category_id',
        'name',
        'description',
        'status',
        'slug',
    ];

    public function jobCategory()
    {
        return $this->belongsTo(JobCategory::class);
    }
    public function jobPosts()
    {
        return $this->hasMany(JobPost::class);
    }
}
