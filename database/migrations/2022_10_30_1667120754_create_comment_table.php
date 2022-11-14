<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTable extends Migration
{
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {

		$table->bigIncrements('IdComment');
        $table->integer('IdPostComment');
		$table->string('IdPengcomment',255);
		$table->string('NamaPengcomment',255);
		$table->string('IsiComment',255);
		$table->integer('Like')->nullable()->default('0');
        $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comment');
    }
}