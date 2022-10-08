<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildsTable extends Migration
{
	 /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('builds', function (Blueprint $table) {
		$table->bigIncrements('idBuilds',50);
		$table->integer('KebutuhanBuilds');
		$table->integer('BudgetBuilds');
		$table->integer('KebutuhanStorage');
		$table->integer('Motherboard');
		$table->string('NamaMobo')->nullable()->default('NULL');
		$table->string('HargaMobo')->nullable()->default('NULL');
		$table->string('ImgMobo')->nullable()->default('NULL');
		$table->integer('Cpu');
		$table->string('NamaCpu')->nullable()->default('NULL');
		$table->string('HargaCpu')->nullable()->default('NULL');
		$table->string('ImgCpu')->nullable()->default('NULL');
		$table->integer('Ram');
		$table->string('NamaRam')->nullable()->default('NULL');
		$table->string('HargaRam')->nullable()->default('NULL');
		$table->string('ImgRam')->nullable()->default('NULL');
		$table->integer('VGA');
		$table->string('NamaVga')->nullable()->default('NULL');
		$table->string('HargaVga')->nullable()->default('NULL');
		$table->string('ImgVga')->nullable()->default('NULL');
		$table->integer('PSU');
		$table->string('NamaPsu')->nullable()->default('NULL');
		$table->string('HargaPsu')->nullable()->default('NULL');
		$table->string('ImgPsu')->nullable()->default('NULL');
		$table->integer('CpuCooler');
		$table->string('NamaCpuCooler')->nullable()->default('NULL');
		$table->string('HargaCpuCooler')->nullable()->default('NULL');
		$table->string('ImgCpuCooler')->nullable()->default('NULL');
		$table->integer('Storage');
		$table->string('NamaStorage')->nullable()->default('NULL');
		$table->string('HargaStorage')->nullable()->default('NULL');
		$table->string('ImgStorage')->nullable()->default('NULL');
		$table->integer('Storage2');
		$table->string('NamaStorage2')->default('No');
		$table->string('HargaStorage2')->default('No');
		$table->string('ImgStorage2')->default('No');
		$table->integer('Fans');
		$table->string('NamaFans')->nullable()->default('NULL');
		$table->string('HargaFans')->nullable()->default('NULL');
		$table->string('ImgFans')->nullable()->default('NULL');
		$table->integer('Casing');
		$table->string('NamaCasing')->nullable()->default('NULL');
		$table->string('HargaCasing')->nullable()->default('NULL');
		$table->string('ImgCasing')->nullable()->default('NULL');
		$table->string('ImgLinks')->nullable()->default('NULL');
		$table->string('HargaBuilds')->nullable()->default('NULL');
		$table->string('Links')->nullable()->default('NULL');
        });
    }

    public function down()
    {
        Schema::dropIfExists('builds');
    }
}