<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('template_category_link', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('template_id');
            $table->unsignedBigInteger('template_category_id');
            $table->foreign('template_id')->references('id')->on('template')->onDelete('restrict');
            $table->foreign('template_category_id')->references('id')->on('template_category')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('template_category_link');
    }
};
