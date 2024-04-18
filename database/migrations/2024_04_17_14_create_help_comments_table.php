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
        Schema::create('help_comments', function (Blueprint $table) {
            $table->id("helpcomment_id");
            $table->longText("visitor_comment");
            $table->date("publication_date")->default(now());
            $table->unsignedBigInteger('visitor');
            $table->foreign('visitor')
                ->references('visitor_id')
                ->on('visitors')
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
        Schema::dropIfExists('help_comments');
    }
};
