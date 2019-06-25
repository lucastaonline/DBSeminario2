<?php

use Illuminate\Database\Seeder;

class PostMongoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PostMongo::class, 50)->create();
    }
}
