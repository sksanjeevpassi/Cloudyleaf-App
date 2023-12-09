<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("roles")->insert([
            [
            "name"  => "superadmin",
            "createdAt" => Carbon::now(),
            "updatedAt" => Carbon::now()
            ],
            [
            "name"  => "admin",
            "createdAt" => Carbon::now(),
            "updatedAt" => Carbon::now()
            ],
            [
            "name"  => "staff",
            "createdAt" => Carbon::now(),
            "updatedAt" => Carbon::now()
            ]
        ]);
    }
}
