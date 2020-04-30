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
            $table->string('title')->default(NULL);
            $table->string('subtitle')->default(NULL);
            $table->text('preview')->default(NULL);
            $table->string('image')->default(NULL);
            
            $table->text('content')->default(NULL);
            $table->boolean('visible')->default(false);

            $table->text('metatitle')->default(NULL);
            $table->text('metakeywords')->default(NULL);
            $table->text('metadescription')->default(NULL);
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
