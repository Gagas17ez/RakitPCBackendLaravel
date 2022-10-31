<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasingTable extends Migration
{
    public function up()
    {
        Schema::create('casing', function (Blueprint $table) {
		$table->bigIncrements('idCasing',);
		$table->string('NamaCasing',200);
		$table->string('MerkCasing',200);
		$table->string('MoboCompatible',200);
		$table->string('DrivebayCasing',200)->nullable()->default('NULL');
		$table->string('FanSupport',200)->nullable()->default('NULL');
		$table->string('FrontPanel',200)->nullable()->default('NULL');
		$table->string('DimensionCasing',200)->nullable()->default('NULL');
		$table->string('WeightCasing',200)->nullable()->default('NULL');
		$table->string('ColorCasing',200)->nullable()->default('NULL');
		$table->string('MaxVgaLength',200)->nullable()->default('NULL');
		$table->string('MaxCoolerHeight',200)->nullable()->default('NULL');
		$table->string('MaxPSU',200)->nullable()->default('NULL');
		$table->string('CasingSidePanel',200)->nullable()->default('NULL');
		$table->integer('Harga')->nullable()->default('0');
		$table->string('ImageLink',200)->nullable()->default('NULL');
		$table->string('Links')->nullable()->default('NULL');
        });
    }

    public function down()
    {
        Schema::dropIfExists('casing');
    }
}