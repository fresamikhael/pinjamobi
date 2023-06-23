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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('users_id');
            $table->integer('categories_id');
            $table->integer('price');
            $table->integer('penalty');
            $table->longText('description');
            $table->integer('status');
            $table->integer('v_regist_number');
            $table->string('colour');
            $table->string('slug');
            $table->string('driver');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
