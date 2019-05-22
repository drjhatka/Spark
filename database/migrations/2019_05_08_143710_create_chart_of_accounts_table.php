<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChartOfAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chart_of_accounts', function (Blueprint $table) {
           // $table->bigIncrements('id');
            $table->timestamps();

            $table->integer('group_code')->unsigned();
            $table->integer('gl_code')->unsigned()->default(0);
            $table->integer('gl_detail_code')->unsigned()->default(0);

            $table->string('group_title');
            $table->string('gl_title')->nullable();
            $table->string('gl_detail_title')->nullable();

            $table->char('is_posting_head')->size(1)->default('Y');//Y or N
            $table->char('is_active')->size(1)->default('Y');

            $table->primary(['group_code', 'gl_code','gl_detail_code']);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chart_of_accounts');
    }
}
