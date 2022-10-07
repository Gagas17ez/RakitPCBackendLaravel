<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpuTable extends Migration
{
    public function up()
    {
        Schema::create('cpu', function (Blueprint $table) {

		$table->bigIncrements('idCPU',7);
		$table->string('NamaCPU',200);
		$table->string('MerkCPU',200);
		$table->string('Socket',200);
		$table->integer('CoreCount',7);
		$table->integer('ThreadsCount',7);
		$table->double('BaseClock',7);
		$table->integer('DefaultTDP',7);
		$table->string('LaunchDate',200)->nullable()->default('NULL');
		$table->string('Cache',200)->nullable()->default('NULL');
		$table->double('MaxClock',)->nullable()->default('NULL');
		$table->string('Unlocked',200)->nullable()->default('NULL');
		$table->string('MaxTemp',200)->nullable()->default('NULL');
		$table->string('ProcTechnology',200)->nullable()->default('NULL');
		$table->integer('Harga',7);
		$table->string('ImageLink',9000)->nullable()->default('NULL');
		$table->string('Links')->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('cpu');
    }
}