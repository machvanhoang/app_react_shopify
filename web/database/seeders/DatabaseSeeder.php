<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DateOfWeekSeeder::class,
            TimesSeeder::class,
            DeliveryTotalDateSeeder::class,
            LockTypeSeeder::class,
            LockStatusSeeder::class,
            LockSpecialSeeder::class,
            LanguageSeeder::class,
        ]);
    }
}
