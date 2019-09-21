<?php

use Illuminate\Database\Seeder;
use Faker\Factory as DataFake;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = DataFake::create('id_ID');
        for($i=1; $i<10; $i++) {
            \App\Article::create([
                'title' => $fake->title,
                'description' => $fake->text,
                'user_id' => 1,
                'category_id' => $i
            ]);
        }
    }
}
