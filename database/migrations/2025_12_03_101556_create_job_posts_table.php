<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();

            // Company Information
            $table->string('company_name');
            $table->unsignedBigInteger('designation_id')->nullable();        // job category
            $table->unsignedBigInteger('job_role_id')->nullable();           // job role
            $table->string('job_type');                                      // full_time, part_time etc.
            $table->string('work_location_type');                            // office/home/field
            $table->string('pay_type');
            $table->unsignedBigInteger('jobposted_by')->nullable();                                 // fixed/hourly etc.

            // Salary
            $table->integer('salary_min')->nullable();
            $table->integer('salary_max')->nullable();

            // Company Logo
            $table->string('company_logo')->nullable();

            // Candidate Requirements
            $table->json('education')->nullable();                           // array of education levels
            $table->json('experience')->nullable();                          // array: any, fresher_only etc.
            $table->integer('age_min')->nullable();
            $table->integer('age_max')->nullable();
            $table->text('job_description')->nullable();

            // Address
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode')->nullable();
            $table->boolean('status')->default(1); // 1=active, 0=inactive
            $table->date('application_deadline')->nullable();
            $table->integer('vacancies')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('website')->nullable();

            // Foreign Keys (optional)
            $table->foreign('designation_id')->references('id')->on('job_categories')->onDelete('set null');
            $table->foreign('job_role_id')->references('id')->on('jobroles')->onDelete('set null');
            $table->foreign('jobposted_by')->references('id')->on('users')->onDelete('set null');

            $table->softDeletes();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_posts');
    }
};
