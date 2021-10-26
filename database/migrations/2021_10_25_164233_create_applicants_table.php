<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2021-10-25 22:42:33
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2021-10-25 23:19:05
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');

            $table->bigInteger('nid')->unique();
            $table->dateTime('birthdate');
            $table->integer('phone');
            $table->string('phone_verified_at');
            $table->date('schedule_date');
            $table->string('vaccine_name');
            $table->dateTime('taken_date');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('center_id');


            // $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreignId('center_id')->references('id')->on('centers')->onDelete('cascade');

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
        Schema::dropIfExists('applicants');
        //$table->dropColumn('is_admin');
    }
}
