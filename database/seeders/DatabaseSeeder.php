<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Problem;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     *
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            UserSeeder::class,
        ]);
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
            \DB::table('categories')->truncate();
            \DB::table('problems')->truncate();
            \DB::table('tags')->truncate();

            Category::factory(10)->create();
            Problem::factory(20)->create();
            Tag::factory(70)->create();
        \DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
