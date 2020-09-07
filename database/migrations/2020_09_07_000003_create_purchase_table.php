<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('purchase_no',20);
            $table->foreign('purchase_warehouse_id')->references('id')->on('warehouses');
            $table->unsignedBigInteger('purchase_warehouse_id');
            $table->foreign('purchase_supplier_id')->references('id')->on('warehouses');
            $table->unsignedBigInteger('purchase_supplier_id');
            $table->double('purchase_grand_total',8,2);
            $table->double('purchase_payable_total',8,2);
            $table->double('purchase_discounted_total',8,2);
            $table->double('purchase_adjust_amount',8,2);
            $table->double('purchase_discount_amount',8,2);
            $table->float('purchase_discount_percentage',8,2);
            $table->string('purchase_order_reference',65);
            $table->dateTime('purchase_date');
            $table->boolean('purchase_cancelled')->default(0);
            $table->boolean('purchase_returned')->default(0);
            $table->boolean('purchase_refunded')->default(0);
            $table->enum('purchase_status',['Active','Inactive'])->default('Active');
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
        Schema::dropIfExists('purchase');
    }
}
