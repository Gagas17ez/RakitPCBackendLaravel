<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
		$table->bigIncrements('IdProfile');
		$table->integer('IdUser');
		$table->string('NamaUser',200);
		$table->string('TipeUser',200);
		$table->string('ProfilePic_Path',200)->nullable()->default('0');
		$table->string('Kelamin',200);
		$table->string('TglLahir',200);
        $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profile');
    }
}