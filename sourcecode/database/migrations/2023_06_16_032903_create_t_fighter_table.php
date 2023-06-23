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
        Schema::create('t_fighter', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->integer('age');
            $table->string('basic',100);
            $table->string('weightClass',100);
            $table->string('fighter_photo',500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_fighter');
    }
};
