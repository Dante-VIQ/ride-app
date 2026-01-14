<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */

    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('driver_name')->nullable()->after('status');
            $table->string('driver_phone')->nullable()->after('driver_name');
            $table->string('vehicle_number')->nullable()->after('driver_phone');
        });
    }

    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn(['driver_name', 'driver_phone', 'vehicle_number']);
        });
    }
};
