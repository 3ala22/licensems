<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateLookupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lookups', function(Blueprint $table){
            $table->increments('id');
            $table->string('lookup_name');
            $table->integer('lookup_id');
            $table->string('value');
            $table->timestamps();

            $table->index('lookup_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lookups');
    }
}
