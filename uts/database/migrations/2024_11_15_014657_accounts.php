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
    Schema::create('accounts', function (Blueprint $table) {
        $table->id();
        $table->string('account_name');  
        $table->string('account_details');  
        $table->unsignedBigInteger('customer_id');  

        $table
        ->foreign('customer_id')
        ->references('id')
        ->on('customers');
       
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
    Schema::dropIfExists('accounts');
}
};