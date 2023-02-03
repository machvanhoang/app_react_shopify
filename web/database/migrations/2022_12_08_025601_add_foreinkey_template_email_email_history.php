<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeinkeyTemplateEmailEmailHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('email_histories', function (Blueprint $table) {
            $table->foreignId('email_template_id')->constrained('email_templates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('email_histories', function (Blueprint $table) {
            $table->dropForeign(['email_template_id']);
        });
    }
}
