<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_itemId')->constrained('items')->onDelete('cascade');
            $table->integer('lowQty');
            $table->integer('highQty');
            $table->integer('lowPrice');
            $table->integer('highPrice');
            $table->integer('lowRate');
            $table->integer('highRate');
            $table->integer('stability');
            $table->integer('demand');
            $table->boolean('trending');
            $table->boolean('iotm');
            $table->boolean('dq');
            $table->integer('dqQty');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
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
        Schema::dropIfExists('prices');
    }
}
