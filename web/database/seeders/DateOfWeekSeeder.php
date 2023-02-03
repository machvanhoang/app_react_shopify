<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DayOfWeek;

class DateOfWeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $day_of_week = [
            [
                'name_en' => 'Monday',
                'name_jp' => '月曜日',
                'type'    => 'monday',
            ],
            [
                'name_en' => 'Tuesday',
                'name_jp' => '火曜日',
                'type'    => 'tuesday',
            ],
            [
                'name_en' => 'Wednesday ',
                'name_jp' => '水曜日',
                'type'    => 'wednesday ',
            ],
            [
                'name_en' => 'Thursday ',
                'name_jp' => '木曜日',
                'type'    => 'thursday ',
            ], [
                'name_en' => 'Friday',
                'name_jp' => '金曜日',
                'type'    => 'friday',
            ],
            [
                'name_en' => 'Saturday',
                'name_jp' => '土曜日',
                'type'    => 'Saturday',
            ],
            [
                'name_en' => 'Sunday',
                'name_jp' => '日曜日',
                'type'    => 'sunday',
            ]
        ];
        foreach ($day_of_week as $key => $value) {
            DayOfWeek::create($value);
        }
    }
}
