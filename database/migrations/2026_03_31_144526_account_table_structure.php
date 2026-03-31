<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('account', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->timestamp('last_login_at')->nullable();
            $table->string('admin_code', 1024)->nullable();
            $table->unsignedBigInteger('partner_id')->nullable();
            $table->unsignedBigInteger('account_type_id');
            $table->string('email', 255);
            $table->string('password', 42);
            $table->string('duda_username', 128)->nullable();
            $table->string('stripe_username', 32)->nullable();
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('currency_id');
            $table->string('first_name', 32);
            $table->string('last_name', 32);
            $table->foreign('account_type_id')->references('id')->on('account_type');
            $table->foreign('currency_id')->references('id')->on('currency');
            $table->foreign('country_id')->references('id')->on('country');
            $table->foreign('partner_id')->references('id')->on('partner');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('account');
    }
};
