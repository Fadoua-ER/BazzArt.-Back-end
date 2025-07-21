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
        Schema::create('artworks', function (Blueprint $table) {
            $table->id('artwork_id');
            $table->char('artwork_code', 10)->unique();
            $table->string('artwork_name');
            $table->longText('artwork_description');
            $table->string('picture');
            $table->date('creation_date')->default(now());
            $table->date('publication_date')->default(now());
            $table->float('price');
            $table->boolean('validation')->default(false);
            $table->unsignedBigInteger('owner');
            $table->unsignedBigInteger('category');
            $table->unsignedBigInteger('location_country');
            $table->unsignedBigInteger('location_city');
            $table->foreign('owner')
                ->references('id')
                ->on('profils')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('category')
                ->references('subcategory_id')
                ->on('sub_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('location_country')
                ->references('country_id')
                ->on('countries')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('location_city')
                ->references('city_id')
                ->on('cities')
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
        Schema::dropIfExists('artworks');
    }
};
