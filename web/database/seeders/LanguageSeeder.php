<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            [
                'name' => 'English',
                'type' => 'en'
            ],
            [
                'name' => 'Japan',
                'type' => 'jp'
            ]
        ];
        foreach ($languages as $key => $item) {
            Language::create($item);
        }
    }
}
