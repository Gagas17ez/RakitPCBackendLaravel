<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMouseTable extends Migration
{
    public function up()
    {
        Schema::create('mouse', function (Blueprint $table) {
		$table->bigIncrements('idMouse');
		$table->string('NamaMouse',200);
		$table->string('MerkMouse',200);
		$table->integer('DpiMaxMouse');
		$table->string('DpiMouse',200);
		$table->string('MouseColor',200);
		$table->string('SensorMouse',200);
		$table->string('TotalButton',200);
		$table->integer('Weight');
		$table->string('Wireless',200);
		$table->string('ImageLinks',200);
		$table->string('Links',200);
		$table->integer('Harga');
		$table->string('RGB',200);
        });
    }

    public function down()
    {
        Schema::dropIfExists('mouse');
    }
}