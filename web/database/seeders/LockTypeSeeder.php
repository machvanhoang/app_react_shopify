<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LockType;

class LockTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lock_types = [
            [
                'name_en' => 'Logged in customers',
                'name_jp' => 'ログインしているお客様'
            ],
            [
                'name_en' => 'Selected customers',
                'name_jp' => '選ばれたお客様'
            ],
            [
                'name_en' => 'Visitors with passcode',
                'name_jp' => 'パスコードを持つ訪問者'
            ]
        ];
        foreach ($lock_types as $key => $item) {
            LockType::create($item);
        }
    }
}
