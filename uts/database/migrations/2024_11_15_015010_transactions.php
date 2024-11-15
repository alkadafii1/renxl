<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->date('transaction_date');  
        $table->decimal('transaction_amount', 10, 2);  
        $table->string('transaction_comment');  
        $table->unsignedBigInteger('account_id');  
        $table->unsignedBigInteger('item_rental_id');  

        $table
        ->foreign('account_id')
        ->references('id')
        ->on('accounts');

        $table
        ->foreign('item_rental_id')
        ->references('id')
        ->on('rentals');

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
    Schema::dropIfExists('transactions');
}
};