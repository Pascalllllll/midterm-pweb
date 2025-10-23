<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->enum('role', ['admin', 'student', 'lecturer']);
            $table->string('phone', 20)->nullable();
            $table->string('address', 255)->nullable();
            $table->boolean('is_active')->default(true);
            $table->dateTime('last_login')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('users');
    }
};
