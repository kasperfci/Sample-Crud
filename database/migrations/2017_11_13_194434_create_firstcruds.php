<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstcruds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firstcruds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uploaded_by');
            $table->string('category');
            $table->string('image');
            $table->timestamps();
            $table->collation = 'utf8_general_ci';
            $table->charset = 'utf8';
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('firstcruds');
    }
}
