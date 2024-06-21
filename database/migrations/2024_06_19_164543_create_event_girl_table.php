<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventGirlTable extends Migration
{
    public function up()
    {
        Schema::create('event_girl', function (Blueprint $table) {
            $table->id();
            $table->foreignId('girl_id')->constrained()->onDelete('cascade');
            $table->foreignId('event_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_girl');
    }
}
