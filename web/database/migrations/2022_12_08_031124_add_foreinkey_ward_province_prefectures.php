<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeinkeyWardProvincePrefectures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wards', function (Blueprint $table) {
            $table->foreignId('province_id')->constrained('provinces');
            $table->foreignId('prefecture_id')->constrained('prefectures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wards', function (Blueprint $table) {
            $table->dropForeign(['province_id']);
            $table->dropForeign(['prefecture_id']);
        });
    }
}
