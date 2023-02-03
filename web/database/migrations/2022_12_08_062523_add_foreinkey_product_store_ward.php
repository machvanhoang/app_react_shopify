<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeinkeyProductStoreWard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_store_wards', function (Blueprint $table) {
            $table->foreignId('store_id')->constrained('stores');
            $table->foreignId('ward_id')->constrained('wards');
            $table->foreignId('delivery_id')->constrained('deliveries');
            $table->foreignId('product_id')->constrained('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_store_wards', function (Blueprint $table) {
            $table->dropForeign(['store_id']);
            $table->dropForeign(['ward_id']);
            $table->dropForeign(['delivery_id']);
            $table->dropForeign(['product_id']);
        });
    }
}
