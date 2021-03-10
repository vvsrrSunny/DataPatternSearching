<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_data', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->double('Price')->nullable();
            $table->integer('Offices')->nullable();
            $table->integer('Tables')->nullable();
            $table->float('Sqm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('office_data');
    }
}
