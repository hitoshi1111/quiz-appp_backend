<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titles', function (Blueprint $table) {
            $table->id();                           //auto_increment
            $table->integer('category_id');         //どのサブカテゴリーに属するか
            $table->string('title');                //クイズタイトル名
            $table->text('description');            //クイズタイトルの説明
            $table->string('thumbnail');            //クイズタイトルのサムネイルファイル名
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titles');
    }
}
