<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationalExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operational_expenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('operational_expense_name',100);
            $table->foreign('operational_expense_type_id')->references('id')->on('operational_expense_types');
            $table->unsignedBigInteger('operational_expense_type_id');
            $table->integer('operational_expense_order')->nullable();
            $table->enum('operational_expense_status',['Active','Inactive'])->default('Active');
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
        Schema::dropIfExists('operational_expenses');
    }
}
