<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable(false)  ;
            $table->string('company_description')->nullable(false)->default('');
            $table->string('company_email')->nullable(false)->unique()->default('');
            $table->string('company_phone')->nullable(false)->unique()->default('');
            $table->string('company_address')->nullable(false)->default('');
            $table->string('company_country')->nullable(false)->default('');
            $table->string('company_state')->nullable(false)->default('');
            $table->string('company_city')->nullable(false)->default('');
            $table->string('company_postalcode')->nullable(false)->default('');
            $table->string('company_website')->unique()->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_facebook')->nullable();
            $table->string('company_twitter')->nullable();
            $table->string('company_instagram')->nullable();
            $table->string('company_youtube')->nullable();
            $table->string('company_telegram')->nullable();
            $table->string('company_whatsapp')->nullable();
            $table->string('company_linkedin')->nullable();



            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
