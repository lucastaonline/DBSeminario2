<?php

use Illuminate\Database\Seeder;

class LikePostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\LikePost::class, 50)->create();
    }
}
