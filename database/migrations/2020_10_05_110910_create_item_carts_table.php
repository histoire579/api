<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_carts', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('qte');
            $table->integer('total');
            $table->integer('produit_id')->unsigned()->index();
            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('restrict');
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
        Schema::dropIfExists('item_carts');
    }
}
