<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeLocationInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_location_informations', function (Blueprint $table) {
            $table->id();
            $table->foreign('sbu_id')->references('id')->on('sbu_informations')->onDelete('cascade');
            $table->unsignedInteger('sbu_id');
            $table->string('address');
            $table->string('created_by');
            $table->string('modified_by');

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
        Schema::dropIfExists('office_location_informations');
    }
}
