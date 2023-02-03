<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeinkeyStoreLanguage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('store_languages', function (Blueprint $table) {
            $table->foreignId('store_id')->constrained('stores');
            $table->foreignId('language_id')->constrained('languages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('store_languages', function (Blueprint $table) {
            $table->dropForeign(['store_id']);
            $table->dropForeign(['language_id']);
        });
    }
}
