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
        DB::table('users')->insert([
        	'name' => 'adminbea',
        	'username' => 'admin',
        	'password' => bcrypt('adminbea'),
        	'level' => 1,
        ]);

        DB::table('users')->insert([
        	'name' => 'febi',
        	'username' => '1603040',
        	'password' => bcrypt('1603040'),
        	'level' => 2,
        ]);
    }
}
