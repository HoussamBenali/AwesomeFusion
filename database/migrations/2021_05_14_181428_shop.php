<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Shop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        // Schema::create('shop', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained('users');
        //     $table->string('poke_id')->constrained('pokemons');
        //     $table->integer('price')->nullable();
        //     $table->dateTime('created_at');
        //     $table->dateTime('updated_at');
        //     // $table->foreign('user_id')->references('id')->on('users');
            
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}