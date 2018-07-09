<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArabicservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arabicservices', function (Blueprint $table) {
            $table->integer('arabicmenu_id')->unsigned();
            $table->foreign('arabicmenu_id')->references('id')->on('arabicmenus')->onDelete('cascade')->onUpdate('cascade');
            $table->increments('id');
            $table->string('title');

            $table->longText('description');
            $table->string('image');
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
        Schema::dropIfExists('arabicservices');
    }
}
