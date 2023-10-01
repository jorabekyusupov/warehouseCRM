<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id") ->nullable();
            $table->unsignedBigInteger("product_id");
            $table->unsignedBigInteger("warehouse_id");
            $table->unsignedBigInteger("attribute_id");
            $table->integer("quantity");
            $table->string("type");
            $table->unsignedBigInteger("order_id")->nullable();
            $table->string("barcode")->nullable();


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('shipments');
    }
};
