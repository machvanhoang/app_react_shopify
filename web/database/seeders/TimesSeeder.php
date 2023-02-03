<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Times;

class TimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $minute = 0;
        for ($i = 1; $i <= 96; $i++) {
            Times::create([
                'name_en' => $this->parseName('en', $minute),
                'name_jp' => $this->parseName('jp', $minute),
                'minute' => $minute,
            ]);
            $minute += 15;
        }
    }
    private function  parseName($language = 'en', $value_minute = 0)
    {
        return (int)($value_minute / 60) . "h" . (($value_minute % 60 == 0 ? "00" : ($value_minute % 60)));
    }
}
