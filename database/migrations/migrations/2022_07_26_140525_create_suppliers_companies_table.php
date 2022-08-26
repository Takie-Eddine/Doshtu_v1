<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->unique();
            $table->string('mobile')->unique();
            $table->string('email')->unique();
            $table->string('address');
            $table->string('website')->nullable();
            $table->string('logo')->nullable();
            $table->boolean('is_active');
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twiter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('telegram')->nullable();
            $table->string('linkedin')->nullable();
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
        Schema::dropIfExists('supplier_companies');
    }
}
