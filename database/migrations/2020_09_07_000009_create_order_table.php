<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_no',20);
            $table->foreign('order_warehouse_id')->references('id')->on('warehouses');
            $table->unsignedBigInteger('order_warehouse_id');
            $table->foreign('order_buyer_id')->references('id')->on('buyers');
            $table->unsignedBigInteger('order_buyer_id');
            $table->double('order_grand_total',8,2);
            $table->double('order_payable_total',8,2);
            $table->double('order_discounted_total',8,2);
            $table->double('order_adjust_amount',8,2);
            $table->double('order_discount_amount',8,2);
            $table->float('order_discount_percentage', 8, 2);	
            $table->string('order_reference',45);
            $table->dateTime('order_date', 0);
            $table->enum('order_status',['Active','Inactive'])->default('Active');
            $table->integer('order_cancelled');
            $table->integer('order_returned');
            $table->integer('order_refunded');



            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
}
