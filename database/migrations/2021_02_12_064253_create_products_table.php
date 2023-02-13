<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('supplier_id')->nullable();
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('pro_sub_category_id')->nullable();
            $table->integer('pro_pro_category_id')->nullable();
            $table->integer('component_id')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->integer('max_order_qty')->nullable();
            $table->integer('min_order_qty')->nullable();
            $table->double('buying_price', 15, 3)->nullable();;
            $table->double('discount_price', 15, 3)->nullable();
            $table->double('regular_price', 15, 3)->nullable();;
            $table->double('special_price', 15, 3)->nullable();;
            $table->integer('discount')->nullable();
            $table->integer('qty');
            $table->integer('total_sell')->nullable();
            $table->integer('total_product')->nullable();
            $table->string('barcode')->nullable();
            $table->longtext('description')->nullable();
            $table->longtext('specification')->nullable();
            $table->longtext('product_highlights')->nullable();
            $table->text('note')->nullable();

            $table->string('shop')->nullable();
            $table->string('stock_status')->nullable();
            
            $table->text('meta_title')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_des')->nullable();
            $table->string('call_for_price')->nullable();
            $table->string('warranty')->nullable();
            $table->text('image_alt')->nullable();
            $table->text('image_des')->nullable();

            $table->integer('click')->nullable();
            $table->string('sku');

            $table->string('image');
            $table->string('image_160x90')->nullable();
            $table->string('image_480x180')->nullable();
            $table->string('image_800x450')->nullable();
            $table->string('image_1600x900')->nullable();
            
            $table->integer('status');
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
        Schema::dropIfExists('products');
    }
}
