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
        Schema::create('profils', function (Blueprint $table) {
            $table->id('artist_id');
            $table->string('artist_firstname');
            $table->string('artist_lastname');
            $table->string('artist_username')->unique();
            $table->longText('biography')->nullable();
            $table->date('artist_birthday');
            $table->string('artist_email');
            $table->string('artist_picture')->nullable();
            $table->unsignedBigInteger('current_country');
            $table->foreign('current_country')
                ->references('country_id')
                ->on('countries')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('artist_phone_code');
            $table->bigInteger('artist_phone_number')->length(10);
            $table->string('artist_password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profils');
    }
};
