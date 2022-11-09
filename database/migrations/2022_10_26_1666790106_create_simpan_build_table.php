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
		$table->integer('HargaTotal');
		$table->integer('IdCasing');
		$table->integer('HargaCasing');
		$table->integer('IdCpu');
		$table->integer('HargaCpu');
		$table->integer('IdCpuCooler');
		$table->integer('HargaCpuCooler');
		$table->integer('IdMotherboard');
		$table->integer('HargaMotherboard');
		$table->integer('IdPsu');
		$table->integer('HargaPsu');
		$table->integer('IdRam1');
		$table->integer('HargaRam1');
		$table->integer('IdRam2');
		$table->integer('HargaRam2');
		$table->integer('IdStorage1');
		$table->integer('HargaStorage1');
		$table->integer('IdStorage2');
		$table->integer('HargaStorage2');
		$table->integer('IdVga');
		$table->integer('HargaVga');
		$table->integer('IdFan1');
		$table->integer('HargaFan1');
		$table->integer('IdFan2');
		$table->integer('HargaFan2');
		$table->integer('IdFan3');
		$table->integer('HargaFan3');
		$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('simpan_build');
    }
}