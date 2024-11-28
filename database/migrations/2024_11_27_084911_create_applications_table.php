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
        Schema::create('applications', function (Blueprint $table) {
            // Creates an auto-incrementing 'id' as primary key.
            $table->id();
            $table->integer('job_id');
            $table->string('full_name');
            // Creates a unique 'email' column to store the applicant's email
            $table->string('email')->unique();
            $table->string('district');
            $table->string('education_status');
            $table->string('cv');

            // Adds 'created_at' and 'updated_at' timestamp columns to track record creation and updates
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
