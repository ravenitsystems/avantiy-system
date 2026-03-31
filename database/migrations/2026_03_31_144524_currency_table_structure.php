<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('currency', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('enabled');
            $table->string('code', 3);
            $table->string('name', 64);
            $table->string('symbol', 16);
            $table->integer('decimals');
            $table->float('exchange_rate');
            $table->timestamp('last_rate_refresh')->nullable();
            $table->longText('flag_svg');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('currency');
    }
};
