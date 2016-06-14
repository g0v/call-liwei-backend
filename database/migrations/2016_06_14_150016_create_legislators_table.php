<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegislatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legislators', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 60);
            $table->string('english_name', 60)->nullable();
            $table->char('gender', 1);
            $table->string('email', 255)->nullable();
            $table->string('experience', 1023)->nullable();
            $table->string('facebook', 255)->nullable();
            $table->string('wiki', 511)->nullable();
            $table->string('line', 255)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('legislators');
    }
}
