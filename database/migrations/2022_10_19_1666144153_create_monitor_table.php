<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitorTable extends Migration
{
    public function up()
    {
        Schema::create('monitor', function (Blueprint $table) {
		$table->bigIncrements('idMonitor');
		$table->string('NamaMonitor',200);
		$table->string('MerkMonitor',200);
		$table->string('MonitorResolusi',200);
		$table->integer('MonitorRefreshRate');
		$table->string('MonitorAspectRatio',200);
		$table->string('MonitorPort',200);
		$table->integer('MonitorSize');
		$table->string('Ultrawide',200);
		$table->string('PanelType',200);
		$table->string('HDR',200);
		$table->string('ScreenTechnology');
		$table->integer('Harga');
		$table->string('ImageLink',200);
		$table->string('Links',200);
        });
    }

    public function down()
    {
        Schema::dropIfExists('monitor');
    }
}