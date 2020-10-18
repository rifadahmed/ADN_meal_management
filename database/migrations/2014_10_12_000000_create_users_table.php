<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->foreign('designation_id')->references('id')->on('designations')->onDelete('cascade');
            $table->unsignedInteger('designation_id');
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('cascade');
            $table->unsignedInteger('unit_id');
            $table->foreign('sbu_id')->references('id')->on('sbu_informations')->onDelete('cascade');
            $table->integer('sbu_id');
            $table->foreign('location_id')->references('id')->on('office_location_informations')->ondDelete('cascade');
            $table->integer('location_id');
            $table->integer('is_avtive')->default(0);
            $table->string('password');
            $table->string('created_by')->nullable();
            $table->string('modified_by')->nullable();

            
            $table->timestamp('email_verified_at')->nullable(); 
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
