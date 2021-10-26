<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2021-10-25 22:51:43
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2021-10-25 22:52:11
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('daily_limit');
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
        Schema::dropIfExists('centers');
    }
}
