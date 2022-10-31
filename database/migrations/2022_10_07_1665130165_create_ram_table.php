<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRamTable extends Migration
{
    public function up()
    {
        Schema::create('ram', function (Blueprint $table) {

		$table->bigIncrements('idRam');
		$table->string('NamaRam',200);
		$table->string('MerkRam',200);
		$table->string('MemoryType',200)->nullable()->default('NULL');
		$table->integer('MemorySize');
		$table->integer('MemorySpeed');
		$table->integer('LatencyCL')->nullable()->default('0');
		$table->string('Voltage',200)->nullable()->default('NULL');
		$table->string('HeatSpreader',200)->nullable()->default('NULL');
		$table->string('Color',200)->nullable()->default('NULL');
		$table->string('RGB',200)->nullable()->default('NULL');
		$table->integer('Harga')->nullable()->default('0');
		$table->string('ImageLink',200)->nullable()->default('NULL');
		$table->string('Links')->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('ram');
    }
}