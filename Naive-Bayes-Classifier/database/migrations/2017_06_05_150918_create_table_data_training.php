<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataTraining extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datatrinings', function (Blueprint $table){
            $table->increments('id');
            $table->enum('age',['1','2','3']);
            $table->enum('spectacle',['1','2']);
            $table->enum('asigmatic',['1','2']);
            $table->enum('tear',['1','2']);
            $table->enum('output',['1','2','3']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
