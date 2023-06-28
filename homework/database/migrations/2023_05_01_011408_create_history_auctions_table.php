<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_auctions', function (Blueprint $table) {
            $table->id();

            $table->integer('product_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->string('email');
            $table->string('name');
            $table->double('price');

            $table->integer('status')->nullable()->default(2);


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
        Schema::dropIfExists('history_auctions');
    }
};
