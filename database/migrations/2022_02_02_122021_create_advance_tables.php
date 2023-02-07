<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvanceTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advance', function (Blueprint $table) {
            $table->increments('id');
            $table->text('custom_id')->nullable();
            $table->integer('staff_id')->unsigned()->nullable();
            $table->integer('project_id')->unsigned()->nullable();
            $table->integer('project_manager_id')->unsigned()->nullable();
            $table->text('description')->nullable();
            $table->double('amount')->nullable();
            $table->double('paid')->nullable();
            $table->tinyInteger('status')->default('1')->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('company_id')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advance_tables');
    }
}
