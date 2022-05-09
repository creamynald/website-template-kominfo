<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSambutansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sambutan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->text('slug');
            $table->text('body');
            $table->text('body_full')->nullable();
            $table->text('foto');
            $table->text('nama');
            $table->text('jabatan');
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
        Schema::dropIfExists('sambutan');
    }
}
