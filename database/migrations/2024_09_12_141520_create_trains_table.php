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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 100);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->time('departure_time');
            $table->date('departure_date');
            $table->time('arrival_time');
            $table->date('arrival_date');
            $table->integer('train_code');
            $table->tinyInteger('carriage_number');
            $table->boolean('in_time')->default(1);
            $table->boolean('deleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
