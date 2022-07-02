<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();                           //auto_increment
            $table->integer('title_id');            //どのクイズタイトルに属するか
            $table->string('question');             //問題
            $table->string('answer1');              //選択肢A
            $table->string('answer2');              //選択肢B
            $table->string('answer3');              //選択肢C
            $table->string('answer4');              //選択肢D
            $table->string('answer5');              //選択肢D
            $table->integer('answer');              //1,2,3,4,5
            $table->text('description');            //回答後の説明
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
        Schema::dropIfExists('quizzes');
    }
}
