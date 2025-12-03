<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    // $fillable = ['name', 'description'];
    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
    ];
    //

    public function jobRoles()
    {
        return $this->hasMany(JobRole::class);
    }
    public function jobPosts()
    {
        return $this->hasMany(JobPost::class);
    }
}
