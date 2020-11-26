<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('titre',50);
            $table->string('description',255);
            $table->integer('prix');
            $table->string('nom',50);
            $table->string('categorie',50);
            $table->integer('etoile');
            $table->date('dates');
            $table->string('disponible',50);
            $table->string('type',50);
            $table->integer('frais');
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
        Schema::dropIfExists('menus');
    }
}
