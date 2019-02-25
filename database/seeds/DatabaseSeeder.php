<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		  $this->command->info('Running DatabaseSeeder');
        // $this->call(UserTableSeeder::class);
		 $this->call([UserTableSeeder::class]);
    }
}
