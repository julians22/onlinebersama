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
        Schema::create('tos_actions', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 60)->nullable();
            $table->boolean('status')->default(false);
            $table->string('ip_address', 45)->nullable();  //ip_address or mac_address
            $table->dateTime('accepted_at')->nullable();
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tos_actions');
    }
};
