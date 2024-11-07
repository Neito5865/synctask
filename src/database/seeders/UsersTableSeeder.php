<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 9; $i++)
        {
            $param = [
                'name' => 'user'. $i,
                'email' => 'test' . $i . '@example.com',
                'tel' => '0000000000' . $i,
                'password' => bcrypt('password')
            ];
            DB::table('users')->insert($param);
        }
    }
}
