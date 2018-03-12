<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimestamps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('article', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('cmd_cli', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('cmd_four', function (Blueprint $table) {
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
         Schema::table('client', function (Blueprint $table) {
            $table->dropTimestamps();   
        });
        Schema::table('article', function (Blueprint $table) {
            $table->dropTimestamps();   
        });
        Schema::table('cmd_cli', function (Blueprint $table) {
            $table->dropTimestamps();   
        });
        Schema::table('cmd_four', function (Blueprint $table) {
            $table->dropTimestamps();   
        });
    }
}
