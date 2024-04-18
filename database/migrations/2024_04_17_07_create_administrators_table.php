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
        Schema::create('administrators', function (Blueprint $table) {
            $table->id("admin_id");
            $table->string("email")->unique();
            $table->string("phone_number");
            $table->string("picture");
            $table->unsignedBigInteger('role');
            $table->foreign('role')
                ->references('role_id')
                ->on('admin_roles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string("password");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrators');
    }
};
