<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavingsAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savings_accounts', function (Blueprint $table) {
            $table->bigIncrements('acc_no');
            $table->timestamps();
            $table->integer('customer_id');
           // $table->integer('acc_no');
            $table->string('title');
            $table->integer('gl_head'); //COA Type
            $table->string('introducer_name');
            $table->integer('introducer_acc_no');
            $table->text('special_instruction');
            $table->string('acc_status_code')->default('Active'); //active deceased etc
            $table->decimal('opening_balance');
            $table->decimal('balance')->default(0);
            $table->char('closing_charge')->default('N');
            $table->decimal('closing_charge_amt')->default(0);
            $table->char('service_charge')->default('N');
            $table->decimal('service_charge_amt')->default(0);
            $table->string('input_by');
            $table->string('authorized_by')->nullable();

        });

        //after creating the table
        DB::update("ALTER TABLE savings_accounts AUTO_INCREMENT = 10210000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('savings_accounts');
    }
}
