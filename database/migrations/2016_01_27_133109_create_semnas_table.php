<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemnasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semnas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 60);
            $table->string('notelp',14);
            $table->string('email', 60);
            $table->boolean('kategori');
            $table->boolean('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('semnas');
    }
}
