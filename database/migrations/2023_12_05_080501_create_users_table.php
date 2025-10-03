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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 100);
            $table->string('username', 25)->unique();
            $table->text('password');
            $table->string('phone', 50);
            $table->string('email', 100)->unique();
            $table->longText('additional_info')->nullable();
            $table->unsignedBigInteger('role');
            $table->longText('special_permissions')->nullable();
            $table->longText('log')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('role')->references('id')->on('roles')->onDelete('cascade');
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
