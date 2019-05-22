<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerIndividualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_individuals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name'); //Name is Required
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('spouse_name')->nullable();
            $table->text('present_address')->nullable();
            $table->text('perm_address')->nullable();
            $table->string('mobile_1')->nullable();
            $table->string('mobile_2')->nullable();
            $table->string('mobile_3')->nullable();
            $table->string('id_type')->nullable();
            $table->string('id_no')->nullable();

            $table->string('contact_name_1')->nullable();
            $table->string('contact_address_1')->nullable();
            $table->string('contact_mobile_1')->nullable();
            
            $table->string('contact_name_2')->nullable();
            $table->string('contact_address_2')->nullable();
            $table->string('contact_mobile_2')->nullable();

            $table->string('status')->default('Active'); //other options Deleted, Defaulter etc
            $table->string('input_by'); //Required
            $table->string('authorized_by')->nullable();
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_individuals');
    }
}
