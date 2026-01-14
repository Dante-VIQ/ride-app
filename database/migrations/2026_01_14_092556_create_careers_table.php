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
        Schema::create('careers', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('slug')->unique();
        $table->text('description');
        $table->text('requirements');
        $table->enum('type', ['full-time', 'part-time', 'contract', 'temporary', 'internship']);
        $table->enum('location', ['onsite', 'remote', 'hybrid']);
        $table->string('department');
        $table->decimal('salary_min', 10, 2)->nullable();
        $table->decimal('salary_max', 10, 2)->nullable();
        $table->string('salary_period')->nullable(); // hourly, monthly, annually
        $table->date('application_deadline')->nullable();
        $table->boolean('is_active')->default(true);
        $table->integer('views')->default(0);
        $table->integer('applications_count')->default(0);
        $table->timestamps();
        $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
