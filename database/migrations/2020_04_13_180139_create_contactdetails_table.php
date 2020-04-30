<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactdetails', function (Blueprint $table) {
            $table->id();
            $table->string("telephone")->default("06");
            $table->string("email")->default("NULL");
            $table->string("address")->default(NULL);
            $table->string("city")->default(NULL);
            $table->string("zipcode")->default(NULL);
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
        Schema::dropIfExists('contactdetails');
    }
}
