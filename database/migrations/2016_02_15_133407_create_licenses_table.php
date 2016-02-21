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
        Schema::create('licences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('license_number');
            $table->integer('activity_type')->unsigned();
            $table->date('expiry_date');
            $table->string('telephone1');
            $table->string('telephone2');
            $table->string('telephone3');
            $table->string('fax');
            $table->string('email');
            $table->string('pobox');
            $table->decimal('cost');
            $table->string('sponsor');
            $table->decimal('sponsor_fees');

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
        Schema::dropTable('licenses');
    }
}
