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
    Schema::create('movies', function (Blueprint $table) {
        $table->id();
        $table->integer('release_year');  
        $table->string('movie_title',50);  
        $table->string('description');  
        $table->string('number_in_stock');  
        $table->enum('status', ['rental', 'sale', 'both']);  
        $table->decimal('rental_daily_rate', 10, 2);  
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
    Schema::dropIfExists('movies');
}
};