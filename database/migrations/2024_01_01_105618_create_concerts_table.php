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
        Schema::create('concerts', function (Blueprint $table) {
            $table->id();
            $table->string('concertName');
            $table->string('concertDescription');
            $table->double('seatPrice1',8,2);
            $table->double('seatPrice2',8,2);
            $table->double('seatPrice3',8,2);
            $table->string('concertImage');
            $table->string('concertSectionBackgroundImg');
            $table->string('concertPhoto1');
            $table->string('concertPhoto2');
            $table->string('concertPhoto3');
            $table->string('concertPhotoDes1');
            $table->string('concertPhotoDes2');
            $table->string('concertPhotoDes3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concerts');
    }
};
