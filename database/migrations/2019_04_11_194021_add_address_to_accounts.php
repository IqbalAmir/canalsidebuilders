<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressToAccounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('accounts', function($table){
        $table->integer('housenumber');
        $table->string('streetname');
        $table->string('city');
        $table->string('postcode');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('accounts', function($table){
        $table->dropColumn('housenumber');
        $table->dropColumn('streetname');
        $table->dropColumn('city');
        $table->dropColumn('postcode');
      });
    }
}
