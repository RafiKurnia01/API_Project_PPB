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
        Schema::create('penggunas', function (Blueprint $table) {
            $table->id();
            $table->string('username', 255)->unique();
            $table->string('password');
            $table->string('jenkel', 10);
            $table->integer('usia');
            $table->string('sekolah', 50);
            $table->unsignedBigInteger('id_rule');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_rule')->references('id')->on('rules');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggunas');
    }
};
