<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_order');
            $table->integer('id_product');
            $table->string('name');
            $table->decimal('price');
            $table->text('image');
            $table->integer('id_size');
            $table->string('size_name');
            $table->integer('id_topping');
            $table->integer('topping_name');
            $table->integer('quantity');
            $table->integer('sumprice');
            $table->integer('id_user');
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
        Schema::dropIfExists('carts');
    }
};
