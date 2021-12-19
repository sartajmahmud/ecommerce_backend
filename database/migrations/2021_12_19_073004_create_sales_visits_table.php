<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_visits', function (Blueprint $table) {
            $table->id();
            $table->integer('salesman_id');
            $table->integer('seller_id');
            $table->string('contact_person');
            $table->string('contact_detail');
            //brands , product category and product consumptions
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
        Schema::dropIfExists('sales_visits');
    }
}
