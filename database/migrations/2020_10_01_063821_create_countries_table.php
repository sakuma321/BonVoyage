<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');  //国名
            $table->text('infomation'); //詳細情報
            $table->datetime('airplane_times');  //東京から目的地までのおおよその所要時間
            $table->string('climate');  //気候
            $table->string('currency');  //通貨
            $table->string('visa');  //visa有無
            $table->string('image');  //国の写真
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
