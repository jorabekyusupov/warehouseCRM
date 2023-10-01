<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('shipment_attributes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id") ->nullable();
            $table->unsignedBigInteger("product_id");
            $table->unsignedBigInteger("warehouse_id");
            $table->decimal("price", 10, 2);
            $table->integer("quantity");
            $table->unsignedBigInteger("supplier_id")->nullable();
            $table->string("currency");

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('shipment_attributes');
    }
};
