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

        // subject
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subject_name');
            $table->timestamps();
        });

        // tutor jobs
        Schema::create('tutor_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('job_title');
            $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade')->onUpdate('cascade');
            $table->string('job_description');
            $table->string('Grade')->nullable();
            $table->string('Meeting_type');
            $table->string('payment_type');
            $table->decimal('payment_rate', 8, 2);
            $table->string('additional_details');
            $table->decimal('budget', 8, 2)->nullable();
            $table->timestamps();
        });

        // bid proposal
        Schema::create('bid_proposals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tutor_jobs_id')->constrained('tutor_jobs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('teacher_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->text('proposal_details');
            $table->decimal('bid_price', 8, 2);
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
        Schema::dropIfExists('tutor_jobs');
        Schema::dropIfExists('bid_proposals');
        
    }
};
