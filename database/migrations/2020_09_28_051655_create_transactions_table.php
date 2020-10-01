<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('transaction_type',['Payable','Receivable']);
            $table->enum('transaction_expense_type',['Business','Operational Expense']);
            $table->enum('transaction_model',['Partial Payment','Full Payment']);
            $table->double('transaction_amount',8,2);
            $table->foreign('transaction_operational_expense_type_id')->references('id')->on('operational_expense_types');
            $table->unsignedBigInteger('transaction_operational_expense_type_id');
            $table->foreign('transaction_supplier_id')->references('id')->on('suppliers');
            $table->unsignedBigInteger('transaction_supplier_id');
            $table->foreign('transaction_purchase_id')->references('id')->on('purchases');
            $table->unsignedBigInteger('transaction_purchase_id');
            $table->foreign('transaction_buyer_id')->references('id')->on('buyers');
            $table->unsignedBigInteger('transaction_buyer_id');
            $table->foreign('transaction_order_id')->references('id')->on('orders');
            $table->unsignedBigInteger('transaction_order_id');
            $table->dateTime('transaction_order_date');
            $table->dateTime('transaction_purchase_date');

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
        Schema::dropIfExists('transactions');
    }
}
