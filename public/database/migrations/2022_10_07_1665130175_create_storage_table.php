<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStorageTable extends Migration
{
    public function up()
    {
        Schema::create('storage', function (Blueprint $table) {

		$table->bigIncrements('idStorage',);
		$table->string('NamaStorage',200);
		$table->string('MerkStorage',200);
		$table->string('TypeStorage',200);
		$table->string('FormFactor',200)->nullable()->default('NULL');
		$table->integer('StorageCapacity',);
		$table->string('StorageInterface',200)->nullable()->default('NULL');
		$table->string('Cache',200)->nullable()->default('NULL');
		$table->integer('ReadSpeed',)->nullable()->default('NULL');
		$table->integer('WriteSpeed',)->nullable()->default('NULL');
		$table->string('RPM',200)->nullable()->default('NULL');
		$table->integer('StorageWatt',)->nullable()->default('NULL');
		$table->integer('Harga',)->nullable()->default('NULL');
		$table->string('ImageLink',200)->nullable()->default('NULL');
		$table->string('Links')->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('storage');
    }
}