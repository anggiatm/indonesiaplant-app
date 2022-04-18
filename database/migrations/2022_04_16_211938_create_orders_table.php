<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
             $table->id();
             $table->string('user_id');
             $table->string('product_id');
             $table->integer('qty');
             $table->decimal('total', 10, 2);
             $table->string('payment_method')->nullable();
             $table->string('account_number')->nullable();
             $table->string('account_name')->nullable();
             $table->string('confirmation')->nullable();
             $table->enum('order_status', ['pending_payment', 'pending_concirmation', 'shipping', 'shipped', 'complete']);
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
        Schema::dropIfExists('orders');
    }
}
