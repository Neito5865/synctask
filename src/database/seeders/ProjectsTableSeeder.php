<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Carbon\Carbon;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::insert([
            [
                'project_name' => '営業チームAプロジェクト',
                'description' => 'これは営業チームのAプロジェクト推進のためのタスク管理に使用します。',
                'created_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'project_name' => '営業チームBプロジェクト',
                'description' => 'これは営業チームのBプロジェクト推進のためのタスク管理に使用します。',
                'created_by' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'project_name' => '商品開発チームCプロジェクト',
                'description' => 'これは技術開発チームのCプロジェクト推進のためのタスク管理に使用します。',
                'created_by' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'project_name' => '採用チームDプロジェクト',
                'description' => 'これは採用チームのDプロジェクト推進のためのタスク管理に使用します。',
                'created_by' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
