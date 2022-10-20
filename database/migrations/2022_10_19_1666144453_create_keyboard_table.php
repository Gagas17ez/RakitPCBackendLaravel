<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyboardTable extends Migration
{
    public function up()
    {
        Schema::create('keyboard', function (Blueprint $table) {
		$table->bigIncrements('idKeyboard');
		$table->string('NamaKeyboard',200);
		$table->string('MerkKeyboard',200);
		$table->string('Mechanical',200);
		$table->string('SwitchType',200);
		$table->string('KeyboardType',200);
		$table->string('Wireless',200);
		$table->string('RGB',200);
		$table->string('ImageLink',200);
		$table->string('KeyboardColor',200);
		$table->integer('Harga');
		$table->string('Links',200);
        });
    }

    public function down()
    {
        Schema::dropIfExists('keyboard');
    }
}