<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGirlsTable extends Migration
{
    public function up()
    {
        Schema::create('girls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->enum('age_group', ['10-14', '15-19']);
            $table->enum('hiv_status', ['negative', 'positive']);
            $table->date('dob');
            $table->string('village');
            $table->enum('schooling_status', ['enrolled', 'not enrolled']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('girls');
    }
}
