<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeinkeyUrlLockStore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lock_urls', function (Blueprint $table) {
            $table->foreignId('store_id')->constrained('stores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lock_urls', function (Blueprint $table) {
            $table->dropForeign(['store_id']);
        });
    }
}
