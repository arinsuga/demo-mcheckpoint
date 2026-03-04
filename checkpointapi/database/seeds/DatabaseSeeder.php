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

		// $this->call('UsersTableSeeder');
        // $this->call('AppsTableSeeder');
        // $this->call('RolesTableSeeder');
        // $this->call('AppUserTableSeeder');
        // $this->call('RoleUserTableSeeder');

        $this->call('AttendsTableSeeder');
    }
}
