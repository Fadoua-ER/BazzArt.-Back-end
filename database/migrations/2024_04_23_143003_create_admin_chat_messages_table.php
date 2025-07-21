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
        Schema::create('admin_chat_messages', function (Blueprint $table) {
            $table->id('admin_chat_mssg_id');
            $table->longText('chat_mssg');
            $table->date('message_sending_date')->nullable()->now();
            $table->unsignedBigInteger('sender_admin');
            $table->foreign('sender_admin')
                ->references('id')
                ->on('administrators')
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
        Schema::dropIfExists('admin_chat_messages');
    }
};
