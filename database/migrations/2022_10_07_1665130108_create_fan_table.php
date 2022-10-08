<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFanTable extends Migration
{
    public function up()
    {
        Schema::create('fan', function (Blueprint $table) {

		$table->bigIncrements('idFans');
		$table->string('NamaFans',200);
		$table->string('MerkFans',200);
		$table->integer('SizeFans');
		$table->string('VoltageFans',200)->nullable()->default('NULL');
		$table->string('PowerFans')->nullable()->default('NULL');
		$table->string('SpeedFans',200);
		$table->string('ColorFans',200)->nullable()->default('NULL');
		$table->string('RGB',200)->nullable()->default('NULL');
		$table->integer('Harga')->nullable()->default('0');
		$table->string('ImageLinks',200)->nullable()->default('NULL');
		$table->string('PowerConnector',200)->nullable()->default('NULL');
		$table->string('Links')->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('fan');
    }
}