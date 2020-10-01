<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('supplier_name',100);
            $table->string('supplier_email',45);
            $table->string('supplier_phone',15);
            $table->string('supplier_company',100);
            $table->text('supplier_address');
            $table->foreign('supplier_division_id')->references('id')->on('divisions');
            $table->unsignedBigInteger('supplier_division_id');
            $table->foreign('supplier_district_id')->references('id')->on('districts');
            $table->unsignedBigInteger('supplier_district_id');
            $table->foreign('supplier_area_id')->references('id')->on('upazilas');
            $table->unsignedBigInteger('supplier_area_id');
            $table->double('supplier_opening_balance',8,2);
            $table->enum('supplier_status',['Active','Inactive'])->default('Active');
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
        Schema::dropIfExists('suppliers');
    }
}
