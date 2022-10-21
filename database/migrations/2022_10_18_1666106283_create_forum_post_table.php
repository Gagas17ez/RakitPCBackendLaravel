<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumpostTable extends Migration
{
    public function up()
    {
        Schema::create('forum_post', function (Blueprint $table) {
		$table->bigIncrements('IdPost');
		$table->string('JudulPost',200);
		$table->string('IsiPost',200);
		$table->integer('IdPengepost');
		$table->string('NamaPengepost',200);
		$table->string('img_path',200);
        });
    }

    public function down()
    {
        Schema::dropIfExists('forumpost');
    }
}