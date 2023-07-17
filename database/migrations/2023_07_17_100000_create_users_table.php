<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
/**
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }
*/

public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id('userId');
        $table->string('firstName');
        $table->string('lastName');
        $table->string('email')->unique();
        $table->string('password');
        $table->unsignedBigInteger('role');
        $table->foreign('role')->references('roleId')->on('roles');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
