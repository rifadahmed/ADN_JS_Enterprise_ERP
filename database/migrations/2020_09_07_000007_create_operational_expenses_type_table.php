<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationalExpensesTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operational_expense_types', function (Blueprint $table) {
            $table->id();
            $table->string('operational_expense_type_name',100);
            $table->integer('operational_expense_type_order')->nullable();
            $table->enum('operational_expense_type_status',['Active','Inactive'])->default('Active');
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
        Schema::dropIfExists('operational_expense_types');
    }
}
