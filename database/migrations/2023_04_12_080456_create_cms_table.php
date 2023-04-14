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
        Schema::create('cms', function (Blueprint $table) {
            $table->id();
            $table->string('home_heading');
            $table->string('home_sub_heading');
            $table->string('home_banner_img')->nullable();
            $table->string('about_heading');
            $table->string('about_sub_heading');
            $table->string('about_banner_img')->nullable();
            $table->longText('about_content');
            $table->string('contact_heading');
            $table->string('contact_sub_heading');
            $table->string('contact_banner_img')->nullable();
            $table->longText('contact_content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms');
    }
};
