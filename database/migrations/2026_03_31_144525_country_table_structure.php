<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('country', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('enabled');
            $table->integer('order_index');
            $table->string('name', 64);
            $table->string('alpha_2', 2);
            $table->string('alpha_3', 3);
            $table->string('dial_code', 32);
            $table->unsignedBigInteger('currency_id');
            $table->longText('flag_svg');
            $table->foreign('currency_id')->references('id')->on('currency');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('country');
    }
};
