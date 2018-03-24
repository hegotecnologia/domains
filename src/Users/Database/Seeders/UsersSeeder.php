<?php

namespace HEGO\Domains\Users\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use HEGO\Domains\Users\Models\User;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // Add the master administrator, user id of 1
        $users = [
            [
                'name'              => 'Admin',
                'email'             => 'admin@admin.com',
                'password'          => bcrypt('1234'),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ]
        ];

        DB::table('users')->insert($users);
        factory(User::class)->times(49)->create();
    }
}