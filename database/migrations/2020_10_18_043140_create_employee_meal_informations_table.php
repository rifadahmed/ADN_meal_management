<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeMealInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_meal_informations', function (Blueprint $table) {
            $table->id();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('user_id');
            $table->foreign('meal_rate_id')->references('id')->on('meal_rates')->onDelete('cascade');
            $table->unsignedInteger('meal_rate_id');
            $table->foreign('meal_item_id')->references('id')->on('meal_items')->onDelete('cascade');
            $table->unsignedInteger('meal_item_id');
            $table->date('date');
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
        Schema::dropIfExists('employee_meal_informations');
    }
}
