<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('template', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('enabled');
            $table->integer('order_index');
            $table->boolean('front_page');
            $table->string('name', 64);
            $table->string('preview_url', 256);
            $table->string('template_type', 16);
            $table->string('visibility', 16);
            $table->boolean('has_store');
            $table->boolean('has_blog');
            $table->boolean('has_booking');
            $table->boolean('has_ai');
            $table->timestamp('last_image_refresh');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('template');
    }
};
