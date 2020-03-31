<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable;
            $table->string('subtitle')->nullable;
            $table->text('preview')->nullable;
            $table->string('image')->nullable;
            
            $table->text('content')->nullable;
            $table->boolean('visible')->default(false);

            $table->text('metatitle')->nullable;
            $table->text('metakeywords')->nullable;
            $table->text('metadescription')->nullable;
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
        Schema::dropIfExists('blogs');
    }
}
