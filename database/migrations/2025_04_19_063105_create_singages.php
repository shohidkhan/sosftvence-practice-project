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
        Schema::create('singages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('singage_type_id');
            $table->foreign('user_id')->references('id')->on('users')
            ->casecadOnUpdate()->restrictOnDelete('restrict');
            $table->foreign('singage_type_id')->references('id')->on('singage_types')
            ->casecadOnUpdate()->restrictOnDelete();

            $table->string('singage_name');
            $table->string('location');
            $table->integer('daily_views');
            $table->text('description');
            $table->float('signage_price');
            $table->float('wide');
            $table->float('height');
            $table->float('rotation_time');
            $table->string('signage_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('singages');
    }
};
