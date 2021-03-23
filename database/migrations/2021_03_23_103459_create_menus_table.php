<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('date'); //練習を行った日程、時間
            $table->string('title'); // Swim, Kick, Pull, W-up
            $table->integer('long'); // 距離
            $table->integer('times'); // 本数
            $table->string('time'); // サークル
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
        Schema::dropIfExists('menus');
    }
}
