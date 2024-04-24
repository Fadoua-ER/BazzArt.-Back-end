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
        Schema::create('admin_notes', function (Blueprint $table) {
            $table->id('admin_note_id');
            $table->longText('note');
            $table->date('note_creating_date')->nullable()->now();
            $table->unsignedBigInteger('analytics_admin');
            $table->foreign('analytics_admin')
                ->references('admin_id')
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
        Schema::dropIfExists('admin_notes');
    }
};
