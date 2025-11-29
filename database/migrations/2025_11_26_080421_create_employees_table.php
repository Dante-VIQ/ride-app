<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name');
            $table->string('employee_id')->unique();
            $table->string('phone_number')->nullable();
            $table->string('drivers_license_number')->nullable();
            $table->string('address')->nullable();
            $table->string('profile_image')->nullable(); // stored path
            $table->json('documents')->nullable(); // array of docs (pdf/doc/docx)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
