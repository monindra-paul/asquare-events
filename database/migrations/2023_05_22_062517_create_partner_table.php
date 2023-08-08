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
        Schema::create('partner', function (Blueprint $table) {
            $table->id();
            $table->string('name',50)->nullable();
            $table->string('email',80)->nullable();
            $table->string('mobile',11)->nullable();
            $table->string('state',50)->nullable();
            $table->string('city',50)->nullable();
            $table->string('country',50)->nullable();
            $table->string('pin',50)->nullable();
            $table->string('address')->nullable();
            $table->longText('description')->nullable();
            $table->string('img_src',255)->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner');
    }
};
