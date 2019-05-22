<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrentAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('current_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('customer_id');
            $table->integer('acc_no');
            $table->string('title');
            $table->integer('account_type'); //COA Type
            $table->string('introducer_name');
            $table->integer('introducer_acc_no');
            $table->text('special_instruction');
            $table->integer('acc_status_code'); //active deceased etc
            $table->decimal('openeing_balace');
            $table->char('closing_charge')->default('N');
            $table->decimal('closing_charge_amt')->default(0);
            $table->char('service_charge')->default('N');
            $table->decimal('service_charge_amt')->default(0);
            $table->string('input_by');
            $table->string('authorized_by');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('current_accounts');
    }
}
