<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Reset table
        DB::table('roles')->delete();

        // Master Roles
        DB::table("roles")->insert([ "id" => 1, "app_id" => 1, "code" => "mstrole", "name" => "Master Role", "description" => "Full Control For All Apps" ]); 

        // Checkpoint Roles
        DB::table("roles")->insert([ "id" => 10, "app_id" => 4, "code" => "super", "name" => "Super User", "description" => "Hak Akses: Full Control" ]); 
        DB::table("roles")->insert([ "id" => 11, "app_id" => 4, "code" => "admin", "name" => "Admin", "description" => "Hak Akses: Reporting, User Access" ]); 
        DB::table("roles")->insert([ "id" => 12, "app_id" => 4, "code" => "user", "name" => "Designer", "description" => "Hak Akses: Checkin – Checkout, History" ]); 
        DB::table("roles")->insert([ "id" => 13, "app_id" => 4, "code" => "guest", "name" => "Pelaksana", "description" => "Hak Akses: Checkin – Checkout, History" ]); 
        DB::table("roles")->insert([ "id" => 14, "app_id" => 4, "code" => "user", "name" => "User", "description" => "Hak Akses: Checkin – Checkout, History" ]); 
        

    }
}
