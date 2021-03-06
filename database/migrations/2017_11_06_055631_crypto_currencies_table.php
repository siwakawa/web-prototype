<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Crypto_currencies.
 *
 * @author  The scaffold-interface created at 2017-11-06 05:56:31pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class CryptoCurrencies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('crypto_currencies',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->String('alias');
        
        $table->String('image');
        
        $table->double('usd_value');

        /**
         * Foreignkeys section
         */



        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('crypto_currencies');
    }
}
