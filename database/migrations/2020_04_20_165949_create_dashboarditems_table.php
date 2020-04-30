<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDashboarditemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashboarditems', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("description");
            $table->string("progress");
            $table->string("addLink")->nullable();
            $table->string("editLink")->nullable();
            $table->boolean("isFavorite")->default(false);
            $table->boolean("category")->nullable();
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
        Schema::dropIfExists('dashboarditems');
    }
}
