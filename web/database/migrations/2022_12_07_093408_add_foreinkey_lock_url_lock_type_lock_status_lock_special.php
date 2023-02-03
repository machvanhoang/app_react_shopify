<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeinkeyLockUrlLockTypeLockStatusLockSpecial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lock_urls', function (Blueprint $table) {
            $table->foreignId('lock_type_id')->constrained('lock_types');
            $table->foreignId('lock_status_id')->constrained('lock_statuses');
            $table->foreignId('lock_special_id')->constrained('lock_specials');
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
            $table->dropForeign(['lock_type_id']);
            $table->dropForeign(['lock_status_id']);
            $table->dropForeign(['lock_special_id']);
        });
    }
}
