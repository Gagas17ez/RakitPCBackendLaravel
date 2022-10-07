<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePowerSupplyTable extends Migration
{
    public function up()
    {
        Schema::create('power_supply', function (Blueprint $table) {

		$table->bigIncrements('idPSU',);
		$table->string('NamaPSU',200);
		$table->string('MerkPSU',200);
		$table->integer('WattPSU',);
		$table->string('80PlusEfficient',200);
		$table->string('FormFactor',200);
		$table->string('Modular',200);
		$table->string('SataConnector',200);
		$table->string('PCIEConnector',200);
		$table->string('SilentMode',200);
		$table->integer('FanSize',);
		$table->string('ATXConnector',200);
		$table->string('ColorPsu',200);
		$table->string('RGB',200);
		$table->integer('Harga',)->nullable()->default('NULL');
		$table->string('ImageLink',200);
		$table->string('Links')->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('power_supply');
    }
}