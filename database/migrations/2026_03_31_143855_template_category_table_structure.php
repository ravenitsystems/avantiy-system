<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('template_category', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('enabled');
            $table->integer('order_index');
            $table->string('name', 64);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('template_category');
    }
};
