<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeinKeyToExemplaires extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exemplaires', function (Blueprint $table) {
            $table->integer('ouvrage_id')->unsigned();


            $table->foreign('ouvrage_id')->references('id')->on('ouvrages');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exemplaires', function (Blueprint $table) {
            //
        });
    }
}
