<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'テストユーザー1',
                'email' => 'user1@example.com',
                'tel' => '09000000001',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'テストユーザー2',
                'email' => 'user2@example.com',
                'tel' => '09000000002',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'テストユーザー3',
                'email' => 'user3@example.com',
                'tel' => '09000000003',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'テストユーザー4',
                'email' => 'user4@example.com',
                'tel' => '09000000004',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'テストユーザー5',
                'email' => 'user5@example.com',
                'tel' => '09000000005',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'テストユーザー6',
                'email' => 'user6@example.com',
                'tel' => '09000000006',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'テストユーザー7',
                'email' => 'user7@example.com',
                'tel' => '09000000007',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'テストユーザー8',
                'email' => 'user8@example.com',
                'tel' => '09000000008',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'テストユーザー9',
                'email' => 'user9@example.com',
                'tel' => '09000000009',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'テストユーザー10',
                'email' => 'user10@example.com',
                'tel' => '09000000010',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
