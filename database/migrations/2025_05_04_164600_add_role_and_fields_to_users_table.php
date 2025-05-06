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
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['admin', 'host', 'guest'])->default('guest')->after('password');
            $table->string('phone')->nullable()->after('role');
            $table->string('profile_photo')->nullable()->after('phone');
            $table->enum('status', ['active', 'suspended'])->default('active')->after('profile_photo');
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'phone', 'profile_photo', 'status']);
        });
    }
};
