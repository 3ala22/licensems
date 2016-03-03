<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('license_number');
            $table->boolean('status');
            $table->integer('activity_type')->unsigned();
            $table->date('issue_date')->nullable();
            $table->date('expiry_date');
            $table->string('trade_name');
            $table->integer('legal_type');
            $table->string('telephone')->nullable();
            $table->string('mobile1')->nullable();
            $table->string('mobile2')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('pobox')->nullable();
            $table->string('address')->nullable();
            $table->string('street')->nullable();
            $table->string('floor')->nullable();
            $table->string('area')->nullable();
            $table->string('building')->nullable();
            $table->string('unit')->nullable();
            $table->decimal('cost')->nullable();
            $table->string('sponsor')->nullable();
            $table->decimal('sponsor_fees')->nullable();

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
        Schema::drop('licenses');
    }
}
