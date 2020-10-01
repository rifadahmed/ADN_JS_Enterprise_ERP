<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('buyer_name',100);
            $table->string('buyer_company',100)->nullable();
            $table->text('buyer_address');
            $table->foreign('buyer_type_id')->references('id')->on('buyer_types');
            $table->unsignedBigInteger('buyer_type_id');
            $table->foreign('buyer_division_id')->references('id')->on('divisions');
            $table->unsignedBigInteger('buyer_division_id');
            $table->foreign('buyer_district_id')->references('id')->on('districts');
            $table->unsignedBigInteger('buyer_district_id');
            $table->foreign('buyer_area_id')->references('id')->on('upazilas');
            $table->unsignedBigInteger('buyer_area_id');
            $table->foreign('buyer_kam_id')->references('id')->on('users');
            $table->unsignedBigInteger('buyer_kam_id');
            $table->string('buyer_phone',13);
            $table->string('buyer_email',75);
            $table->enum('buyer_status',['Active','Inactive'])->default('Active');
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
        Schema::dropIfExists('buyers');
    }
}
