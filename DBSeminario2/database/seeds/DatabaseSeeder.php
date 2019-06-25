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
        $this->call(AccountTableSeeder::class);
        if(env('DB_CONNECTION') == 'mysql' ) {
            $this->call(PostSQLTableSeeder::class);
            $this->call(LikePostTableSeeder::class);
        }
        else if(env('DB_CONNECTION') == 'mongodb') {
            $this->call(PostMongoTableSeeder::class);
        }
    }
}
