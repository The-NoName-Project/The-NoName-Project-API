<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->bigInteger('total_articles');
            // $table->bigInteger('total_price');
            // $table->bigInteger('subtotal');
            //!LLave foranea
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('users');
            $table->unsignedBigInteger('vendedor_id');
            $table->foreign('vendedor_id')->references('id')->on('users');
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
        Schema::dropIfExists('sales');
    }
}
