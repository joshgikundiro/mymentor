<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('mrequests', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('RequesterUserID');
        $table->unsignedBigInteger('ReceiverUserID');
        $table->string('Status'); 
        $table->timestamps();

        // Define foreign key constraints if needed
        $table->foreign('RequesterUserID')->references('id')->on('users');
        $table->foreign('ReceiverUserID')->references('id')->on('users');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mrequests');
    }
};
