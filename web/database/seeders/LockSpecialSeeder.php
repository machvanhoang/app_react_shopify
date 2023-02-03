<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LockSpecial;

class LockSpecialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lock_specials = [
            [
                'name_en' => 'Specific products',
                'name_jp' => '特定の製品',
                'type' => 'special_products'
            ],
            [
                'name_en' => 'Specific collections',
                'name_jp' => '特定のコレクション',
                'type' => 'special_collections'
            ],
            [
                'name_en' => 'Entire storefront',
                'name_jp' => 'ストアフロント全体',
                'type' => 'store_front'
            ],
            [
                'name_en' => 'Specific URL',
                'name_jp' => '特定の URL',
                'type' => 'specific_url'
            ],
            [
                'name_en' => 'Specific page',
                'name_jp' => '特定のページ',
                'type' => 'specific_page'
            ]
        ];
        foreach ($lock_specials as $key => $item) {
            LockSpecial::create($item);
        }
    }
}
