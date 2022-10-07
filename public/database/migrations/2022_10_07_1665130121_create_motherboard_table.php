<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotherboardTable extends Migration
{
    public function up()
    {
        Schema::create('motherboard', function (Blueprint $table) {

		$table->bigIncrements('idMotherboard',);
		$table->string('NamaMobo',150);
		$table->string('MerkMobo',150);
		$table->string('FormFactor',150);
		$table->string('SocketMobo',150);
		$table->string('ChipsetMobo',150);
		$table->string('MemoryType',150);
		$table->string('SlotMemory',150);
		$table->string('SataSlot',150)->nullable()->default('NULL');
		$table->string('PCIE',150)->nullable()->default('NULL');
		$table->string('PCIgen',150)->nullable()->default('NULL');
		$table->string('M2Slot',150)->nullable()->default('NULL');
		$table->string('UsbPort',150)->nullable()->default('NULL');
		$table->string('AudioPort',150)->nullable()->default('NULL');
		$table->string('DisplayOutput',150)->nullable()->default('NULL');
		$table->string('LanPort',150)->nullable()->default('NULL');
		$table->string('ImageLink',150)->nullable()->default('NULL');
		$table->string('Warna',150)->nullable()->default('NULL');
		$table->string('RGB',150)->nullable()->default('NULL');
		$table->integer('Harga',)->nullable()->default('NULL');
		$table->string('Links')->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('motherboard');
    }
}