<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('districts', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->foreign('division_id')->references('id')->on('divisions');
        //     $table->unsignedBigInteger('division_id');
        //     $table->string('name',100);
        //     $table->string('bn_name',100);
        //     $table->string('code',100);
        //     $table->integer('created_by')->nullable();
        //     $table->integer('updated_by')->nullable();
        //     $table->softDeletes();
        //     $table->timestamps();
        //     $table->enum('status',['Active','Inactive'])->default('Active');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('districts');
    }
}
