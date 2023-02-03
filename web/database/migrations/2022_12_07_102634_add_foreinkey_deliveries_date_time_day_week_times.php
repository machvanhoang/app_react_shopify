<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeinkeyDeliveriesDateTimeDayWeekTimes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deliveries_date_times', function (Blueprint $table) {
            $table->foreignId('delivery_id')->constrained('deliveries');
            $table->foreignId('day_of_week_id')->constrained('day_of_weeks');
            $table->foreignId('time_start_id')->constrained('times');
            $table->foreignId('time_end_id')->constrained('times');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deliveries_date_times', function (Blueprint $table) {
            $table->dropForeign(['delivery_id']);
            $table->dropForeign(['day_of_week_id']);
            $table->dropForeign(['time_start_id']);
            $table->dropForeign(['time_end_id']);
        });
    }
}
