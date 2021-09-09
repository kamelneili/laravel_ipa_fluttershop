<?php

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
        factory(App\Adress::class, 20)->create();

        factory(App\User::class, 10)->create();
        factory(App\Product::class, 20)->create();

        factory(App\Image::class, 20)->create();
        factory(App\Review::class, 20)->create();

    }
}
