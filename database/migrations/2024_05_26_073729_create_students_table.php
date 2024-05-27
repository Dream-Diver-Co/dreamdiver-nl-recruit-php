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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('mobile');
            $table->string("education")->nullable();
            $table->string('experience')->nullable();
            $table->string('salary')->nullable();
            $table->string('reference')->nullable();
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->date('date')->nullable();
            $table->string('file')->nullable();
            $table->string('link')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};



