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
    Schema::create('jobroles', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->unsignedBigInteger('job_category_id'); // casting removed
        $table->text('description')->nullable();
        $table->string('slug')->unique();
        $table->boolean('status')->default(true);
        $table->timestamps();

        // Optional: foreign key constraint
        $table->foreign('job_category_id')->references('id')->on('job_categories')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobroles');
    }
};
