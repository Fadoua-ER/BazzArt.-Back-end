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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('client_firstname');
            $table->string('client_lastname');
            $table->date('client_birthday');
            $table->string('client_email')->unique();
            $table->string('client_password');
            $table->string('client_adresse');
            $table->string('client_picture')->nullable();
            $table->unsignedBigInteger('country');
            $table->foreign('country')
                ->references('country_id')
                ->on('countries')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('client_phone_code');
            $table->bigInteger('client_phone_number')->length(10);
            $table->string('api_token');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
