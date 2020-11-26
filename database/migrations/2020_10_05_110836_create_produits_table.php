<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('titre',50);
            $table->string('description',255);
            $table->integer('prix');
            $table->string('categorie',50);
            $table->integer('etoile');
            $table->date('dates');
            $table->integer('images_id')->unsigned();
            $table->integer('disponiblite_id')->unsigned()->index();
            $table->foreign('images_id')->references('id')->on('images')->onDelete('restrict');
            $table->foreign('disponiblite_id')->references('id')->on('disponibilites')->onDelete('restrict');
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
        Schema::dropIfExists('produits');
    }
}
