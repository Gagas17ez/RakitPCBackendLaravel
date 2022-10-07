<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpuCoolerTable extends Migration
{
    public function up()
    {
        Schema::create('cpu_cooler', function (Blueprint $table) {

		$table->bigIncrements('idCooler',);
		$table->string('NamaCooler',200);
		$table->string('MerkCooler',200);
		$table->string('TypeCooler',200);
		$table->string('SocketCooler',200);
		$table->string('DimensionCooler',200)->nullable()->default('NULL');
		$table->string('FanQuantity',200);
		$table->string('FanSpeed',200);
		$table->string('PowerCooler',200)->nullable()->default('NULL');
		$table->string('ColorCooler',200)->nullable()->default('NULL');
		$table->string('RGB',200)->nullable()->default('NULL');
		$table->integer('Harga',)->nullable()->default('NULL');
		$table->string('ImageLink',200)->nullable()->default('NULL');
		$table->string('Links')->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('cpu_cooler');
    }
}