<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pests', function (Blueprint $table) {
            $table->id();
            $table->string('fenologic_state');
            $table->double('temperature');
            $table->double('umidity');
            $table->integer('irrigation_period');
            $table->string('secondary_codition');
            $table->string('name');
            $table->string('alert_message');
            $table->integer('crop_id')->unsigned();
            $table->foreign('crop_id')->references('id')->on('crops');
            $table->timestamps('created_at');
            $table->timestamps('update_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pests');
    }
};
