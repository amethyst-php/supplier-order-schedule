<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateSupplierOrderSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.supplier-order-schedule.data.supplier-order-schedule.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->text('description')->nullable();
            $table->text('request_cron')->nullable();
            $table->text('delivery_cron')->nullable();
            $table->text('shipment_day')->nullable();
            $table->integer('supplier_id')->unsigned()->nullable();
            $table->foreign('supplier_id')->references('id')->on(Config::get('amethyst.supplier.data.supplier.table'));
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.supplier-order-schedule.data.supplier-order-schedule.table'));
    }
}
