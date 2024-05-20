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
        Schema::create('projectsinglepages', function (Blueprint $table) {
            $table->id();
            $table->string('project_id')->nullable();
            $table->string('project_cover_photo')->nullable();
            $table->string('project_title')->nullable();
            $table->text('project_description')->nullable();
            $table->text('project_short_description')->nullable();
            $table->text('project_video_link')->nullable();
            $table->text('project_link')->nullable();
            $table->text('project_client_review')->nullable();
            $table->text('project_client_video_review')->nullable();
            $table->string('status')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projectsinglepages');
    }
};
