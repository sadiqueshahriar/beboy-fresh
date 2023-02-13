<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreeItemForClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_item_for_clients', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('free_item_image')->nullable();
            $table->string('free_item_title')->nullable();
            $table->string('free_item_alt')->nullable();
            $table->string('free_item_des')->nullable();
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
        Schema::dropIfExists('free_item_for_clients');
    }
}
