<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInvoiceLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_invoice_lines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_invoice_id');
            $table->string("description");
            $table->string("item_code");
            $table->string("quantity");
            $table->string("taxamount");
            $table->string("taxrate");
            $table->string("amount");
            $table->string("total");

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
        Schema::dropIfExists('user_invoice_lines');
    }
}
