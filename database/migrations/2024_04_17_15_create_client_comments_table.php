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
        Schema::create('client_comments', function (Blueprint $table) {
            $table->id('accomment_id'); // Client comment on an artwork id
            $table->longText('client_comment');
            $table->date('publication_date')->default(now());
            $table->unsignedBigInteger('client');
            $table->unsignedBigInteger('artwork');
            $table->foreign('client')
                ->references('id')
                ->on('clients')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('artwork')
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
        Schema::dropIfExists('client_comments');
    }
};
