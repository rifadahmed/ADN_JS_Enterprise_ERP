<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('purchase_id')->references('id')->on('purchase');
            $table->unsignedBigInteger('purchase_id');
            $table->foreign('product_id')->references('id')->on('product');
            $table->unsignedBigInteger('product_id');
            $table->foreign('category_id')->references('id')->on('category');
            $table->unsignedBigInteger('category_id');
            $table->foreign('sub_category_id')->references('id')->on('sub_category');
            $table->unsignedBigInteger('sub_category_id');
            $table->double('price',8,2);
            $table->double('quantity',8,2);
            $table->double('total_price',8,0);
            $table->enum('product_status',['Active','Inactive'])->default('Active');
            $table->integer('created_by');
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
        Schema::dropIfExists('purchase_details');
    }
}
