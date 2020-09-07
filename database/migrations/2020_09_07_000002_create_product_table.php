<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name',100);
            $table->foreign('product_category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('product_category_id');
            $table->foreign('product_sub_category_id')->references('id')->on('sub_categories');
            $table->unsignedBigInteger('product_sub_category_id');
            $table->foreign('product_brand_id')->references('id')->on('brands');
            $table->unsignedBigInteger('product_brand_id');
            $table->char('product_sku',20);
            $table->double('product_retail_price',8,2);
            $table->double('product_wholesale_price',8,2);
            $table->text('product_description');
            $table->enum('product_status',['Active','Inactive'])->default('Active');
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
        Schema::dropIfExists('product');
    }
}
