<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateActivitiablesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.activity.data.activitiable.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('relation')->nullable();
            $table->integer('activity_id')->unsigned();
            $table->foreign('activity_id')->references('id')->on(Config::get('amethyst.activity.data.activity.table'));
            $table->string('activitiable_type');
            $table->integer('activitiable_id')->unsigend();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.activity.data.activitiable.table'));
    }
}
