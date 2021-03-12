<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practices', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Swim, Kick, Pull, W-up
            $table->integer('long'); // 距離
            $table->integer('times'); // 本数
            $table->integer('time'); // サークル
            $table->string('style'); // 種目
            $table->string('strength'); // 強度・練習内容
            $table->integer('total'); // トータル
            $table->text('impression'); // 感想・反省
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
        Schema::dropIfExists('practices');
    }
}
