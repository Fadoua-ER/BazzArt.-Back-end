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
        Schema::create('administration_messages', function (Blueprint $table) {
            $table->id("admin_message_id");
            $table->longtext("message");
            $table->string("message_type");
            $table->unsignedBigInteger('concerned_profil');
            $table->unsignedBigInteger('responsible_admin');
            $table->foreign('concerned_profil')
                ->references('artist_id')
                ->on('profils')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('responsible_admin')
                ->references('administrators')
                ->on('admin_id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administration_messages');
    }
};
