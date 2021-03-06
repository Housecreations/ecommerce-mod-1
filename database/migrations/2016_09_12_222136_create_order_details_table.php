<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('order_details', function(Blueprint $table){
         $table->engine = 'InnoDB';
             $table->increments('id');
           $table->integer('order_id')->unsigned();
           $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
           $table->string('name');
            $table->decimal('price', 10, 2);
           
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
        Schema::drop('order_details');
    }
}
