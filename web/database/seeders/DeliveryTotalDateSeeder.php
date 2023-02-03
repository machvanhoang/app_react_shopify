<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DeliveriesTotalDate;

class DeliveryTotalDateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $delivery_total_date = [
            5, 10, 15, 20, 25, 30, 45
        ];
        foreach ($delivery_total_date as $key => $value) {
            DeliveriesTotalDate::create([
                'value' => $value
            ]);
        }
    }
}
