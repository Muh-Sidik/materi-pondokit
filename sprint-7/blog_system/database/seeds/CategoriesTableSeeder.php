<?php

use Illuminate\Database\Seeder;
use Faker\Factory as DataFake;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = DataFake::create('en_US');
        for($i=1; $i<10; $i++) {
            \App\Category::create([
                'name_category' => $fake->title
            ]);
        }
    }
}
