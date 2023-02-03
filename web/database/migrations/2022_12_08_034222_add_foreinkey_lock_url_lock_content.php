<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeinkeyLockUrlLockContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lock_contents', function (Blueprint $table) {
            $table->foreignId('lock_url_id')->constrained('lock_urls');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lock_contents', function (Blueprint $table) {
            $table->dropForeign(['lock_url_id']);
        });
    }
}
