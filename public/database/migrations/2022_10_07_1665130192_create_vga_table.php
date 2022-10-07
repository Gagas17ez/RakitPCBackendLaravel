<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVgaTable extends Migration
{
    public function up()
    {
        Schema::create('vga', function (Blueprint $table) {
		$table->bigIncrements('idVGA',);
		$table->string('NamaVGA',200);
		$table->string('ReleaseDate');
		$table->string('MerkVGA',200);
		$table->string('Generation');
		$table->string('Interface',200);
		$table->integer('BaseClocks',);
		$table->integer('BoostClock',);
		$table->string('MemoryClock');
		$table->string('MemoryVGA',200);
		$table->string('MemoryType');
		$table->string('MemoryBus',200);
		$table->string('OutputPort',200)->nullable()->default('NULL');
		$table->string('PowerConsumption',200)->nullable()->default('NULL');
		$table->string('PowerConnection',200)->nullable()->default('NULL');
		$table->string('DimensionVGA',200)->nullable()->default('NULL');
		$table->string('Architecture',200)->nullable()->default('NULL');
		$table->string('MaxDisplay',200)->nullable()->default('NULL');
		$table->string('RGB',200)->nullable()->default('NULL');
		$table->string('RTcores')->nullable()->default('NULL');
		$table->string('Color',200)->nullable()->default('NULL');
		$table->string('ImageLink',200)->nullable()->default('NULL');
		$table->integer('Harga',)->nullable()->default('NULL');
		$table->string('GraphicAPI',200)->nullable()->default('NULL');
		$table->string('DisplayTechnology',200)->nullable()->default('NULL');
		$table->string('Links')->nullable()->default('NULL');
        });
    }

    public function down()
    {
        Schema::dropIfExists('vga');
    }
}