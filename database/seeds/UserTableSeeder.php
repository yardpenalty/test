<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class UserTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		DB::table('users')->delete();
        $this->command->info('User table deleted\n!');
        DB::table('users')->updateOrInsert(['name' => 'yardpenalty','email' => 'yardpenalty@yahoo.com','first_name' => 'Brian','last_name' => 'Streeter','password' => 'canseco33','password_hint' => 'Oakland A\'s']);
        $this->command->info('User table seeded!');  
  }
}
