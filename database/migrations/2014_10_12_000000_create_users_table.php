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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('nik');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->longText('address');
            $table->integer('phone_number')->nullable();
            $table->string('rent_name')->nullable();
            $table->integer('rent_status')->nullable();
            $table->string('roles')->default('USER');
            $table->string('photo')->nullable();

            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
