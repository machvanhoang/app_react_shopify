<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LockStatus;

class LockStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lock_status = [
            [
                'name_en' => 'Enable',
                'name_jp' => '有効',
            ],
            [
                'name_en' => 'Disable',
                'name_jp' => '無効',
            ],
        ];
        foreach ($lock_status as $key => $item) {
            LockStatus::create($item);
        }
    }
}
