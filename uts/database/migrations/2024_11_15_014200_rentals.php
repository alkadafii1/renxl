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
    Schema::create('rentals', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('customer_id');  
        $table->unsignedBigInteger('movie_id');  
        $table->date('rental_date_out');  
        $table->date('rental_date_returned'); 
        $table->decimal('rental_amount_due', 10, 2);  

        $table
        ->foreign('customer_id')
        ->references('id')
        ->on('customers');

        $table
        ->foreign('movie_id')
        ->references('id')
        ->on('movies');

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
    Schema::dropIfExists('rentals');
}
};