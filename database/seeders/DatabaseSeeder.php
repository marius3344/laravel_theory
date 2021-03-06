<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\BrandSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\CategorySeeder;
use App\Models\Post;
use App\Models\User;
use App\Models\IdentityCard;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User::factory(10)->create();
        IdentityCard::factory(10)->create();
        Post::factory(100)->create();
        $this->call([
            UserSeeder::class,
            BrandSeeder::class,
            ProductSeeder::class,
            CategorySeeder::class
        ]);

    }
}
