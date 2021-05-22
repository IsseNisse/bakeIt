<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('phone');
            $table->text('info');
            $table->timestamps();
        });

        Schema::create('order_pastry', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('pastry_id');
            $table->timestamps();

            $table->unique(['order_id', 'pastry_id']);

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('pastry_id')->references('id')->on('pastries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
