<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLatticiniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latticini', function (Blueprint $table) {
          $table->id();
          $table->string('prodotto', 10);
          $table->text('url_img');
          $table->text('descrizione');
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
        Schema::dropIfExist('latticini', function (Blueprint $table) {

        });
    }
}
