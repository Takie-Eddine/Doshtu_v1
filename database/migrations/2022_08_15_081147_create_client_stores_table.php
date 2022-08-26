<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_stores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->references('id')->on('clients') ->constrained()->cascadeOnDelete();
            $table->foreignId('store_id')->references('id')->on('stores') ->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('client_stores');
    }
}
