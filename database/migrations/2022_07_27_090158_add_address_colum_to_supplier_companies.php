<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressColumToSupplierCompanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('supplier_companies', function (Blueprint $table) {

            $table->string('country')->after('address');
            $table->string('city')->after('country');
            $table->string('state')->after('city');
            $table->integer('pincode')->after('state');


            $table->foreign('country')
            ->references('id')
            ->on('countries')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('supplier_companies', function (Blueprint $table) {
            //
        });
    }
}
