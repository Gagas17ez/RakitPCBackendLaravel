<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimpanBuildTable extends Migration
{
    public function up()
    {
        Schema::create('simpan_build', function (Blueprint $table) {
		$table->bigIncrements('IdSimpan');
		$table->string('NamaBuild',200);
		$table->integer('IdUser');
		$table->integer('Compatible');
		$table->integer('Harga');
		$table->integer('IdCasing');
		$table->integer('IdCpu');
		$table->integer('IdCpuCooler');
		$table->integer('IdMotherboard');
		$table->integer('IdPsu');
		$table->integer('IdRam1');
		$table->integer('IdRam2');
		$table->integer('IdStorage1');
		$table->integer('IdStorage2');
		$table->integer('IdVga');
		$table->integer('IdFan1');
		$table->integer('IdFan2');
		$table->integer('IdFan3');
		$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('simpan_build');
    }
}