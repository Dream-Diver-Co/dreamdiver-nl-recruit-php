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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("education")->nullable();
            $table->string("job_title")->nullable();
            $table->string("salary")->nullable();
            $table->string("job_description")->nullable();
            $table->string("location")->nullable();
            $table->string("company_name")->nullable();
            $table->string("skills")->nullable();
            $table->string("mobile")->nullable();
            $table->string("email")->nullable();
            $table->string("image")->nullable();
            $table->date("date")->nullable();
            $table->string("file")->nullable();
            $table->string("link")->nullable();
            $table->text("process")->nullable();
            $table->text("note")->nullable();
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

