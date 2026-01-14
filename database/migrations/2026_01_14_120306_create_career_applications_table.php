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
        Schema::create('career_applications', function (Blueprint $table) {
        $table->id();
        $table->foreignId('career_id')->constrained()->onDelete('cascade');
        $table->string('application_number')->unique();
        $table->string('first_name');
        $table->string('last_name');
        $table->string('email');
        $table->string('phone');
        $table->string('address')->nullable();
        $table->string('city')->nullable();
        $table->string('state')->nullable();
        $table->string('country')->nullable();
        $table->string('postal_code')->nullable();
        $table->text('cover_letter')->nullable();
        $table->string('resume_path');
        $table->string('additional_documents')->nullable(); // JSON array of file paths
        $table->string('linkedin_url')->nullable();
        $table->string('portfolio_url')->nullable();
        $table->string('hear_about_us')->nullable();
        $table->enum('status', ['pending', 'reviewing', 'shortlisted', 'rejected', 'hired'])->default('pending');
        $table->text('admin_notes')->nullable();
        $table->integer('rating')->nullable(); // 1-5 stars
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_applications');
    }
};
