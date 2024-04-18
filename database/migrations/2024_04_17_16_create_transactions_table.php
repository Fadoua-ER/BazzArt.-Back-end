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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transaction_id');
            $table->string('transaction_code')->unique();
            $table->date('transaction_date')->default(now());
            $table->unsignedBigInteger('transaction_client');
            $table->unsignedBigInteger('transaction_artist');
            $table->unsignedBigInteger('transaction_artwork');
            $table->foreign('transaction_client')
                ->references('client_id')
                ->on('clients')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('transaction_artist')
                ->references('artist_id')
                ->on('profils')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('transaction_artwork')
                ->references('artwork_id')
                ->on('artworks')
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
        Schema::dropIfExists('transactions');
    }
};
