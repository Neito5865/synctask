<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\Status;
use Carbon\Carbon;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::insert([
            [
                'project_id' => 1,
                'created_by' => 1,
                'assigned_to' => 1,
                'status_id' => Status::inRandomOrder()->first()->id,
                'title' => 'テストタスクA-1',
                'description' => 'これはAプロジェクトの1つ目のタスクです。',
                'deadline' => Carbon::now()->addDays(rand(0, 180)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'project_id' => 1,
                'created_by' => 1,
                'assigned_to' => 5,
                'status_id' => Status::inRandomOrder()->first()->id,
                'title' => 'テストタスクA-2',
                'description' => 'これはAプロジェクトの2つ目のタスクです。',
                'deadline' => Carbon::now()->addDays(rand(0, 180)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'project_id' => 1,
                'created_by' => 1,
                'assigned_to' => 5,
                'status_id' => Status::inRandomOrder()->first()->id,
                'title' => 'テストタスクA-3',
                'description' => 'これはAプロジェクトの3つ目のタスクです。',
                'deadline' => Carbon::now()->addDays(rand(0, 180)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'project_id' => 2,
                'created_by' => 2,
                'assigned_to' => 2,
                'status_id' => Status::inRandomOrder()->first()->id,
                'title' => 'テストタスクB-1',
                'description' => 'これはBプロジェクトの1つ目のタスクです。',
                'deadline' => Carbon::now()->addDays(rand(0, 180)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'project_id' => 2,
                'created_by' => 2,
                'assigned_to' => 6,
                'status_id' => Status::inRandomOrder()->first()->id,
                'title' => 'テストタスクB-2',
                'description' => 'これはBプロジェクトの2つ目のタスクです。',
                'deadline' => Carbon::now()->addDays(rand(0, 180)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'project_id' => 2,
                'created_by' => 2,
                'assigned_to' => 6,
                'status_id' => Status::inRandomOrder()->first()->id,
                'title' => 'テストタスクB-3',
                'description' => 'これはBプロジェクトの3つ目のタスクです。',
                'deadline' => Carbon::now()->addDays(rand(0, 180)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'project_id' => 3,
                'created_by' => 3,
                'assigned_to' => 3,
                'status_id' => Status::inRandomOrder()->first()->id,
                'title' => 'テストタスクC-1',
                'description' => 'これはCプロジェクトの1つ目のタスクです。',
                'deadline' => Carbon::now()->addDays(rand(0, 180)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'project_id' => 3,
                'created_by' => 3,
                'assigned_to' => 7,
                'status_id' => Status::inRandomOrder()->first()->id,
                'title' => 'テストタスクC-2',
                'description' => 'これはCプロジェクトの2つ目のタスクです。',
                'deadline' => Carbon::now()->addDays(rand(0, 180)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'project_id' => 3,
                'created_by' => 3,
                'assigned_to' => 7,
                'status_id' => Status::inRandomOrder()->first()->id,
                'title' => 'テストタスクC-3',
                'description' => 'これはCプロジェクトの3つ目のタスクです。',
                'deadline' => Carbon::now()->addDays(rand(0, 180)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'project_id' => 4,
                'created_by' => 4,
                'assigned_to' => 4,
                'status_id' => Status::inRandomOrder()->first()->id,
                'title' => 'テストタスクD-1',
                'description' => 'これはDプロジェクトの1つ目のタスクです。',
                'deadline' => Carbon::now()->addDays(rand(0, 180)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'project_id' => 4,
                'created_by' => 4,
                'assigned_to' => 8,
                'status_id' => Status::inRandomOrder()->first()->id,
                'title' => 'テストタスクD-2',
                'description' => 'これはDプロジェクトの2つ目のタスクです。',
                'deadline' => Carbon::now()->addDays(rand(0, 180)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'project_id' => 4,
                'created_by' => 4,
                'assigned_to' => 8,
                'status_id' => Status::inRandomOrder()->first()->id,
                'title' => 'テストタスクD-3',
                'description' => 'これはDプロジェクトの3つ目のタスクです。',
                'deadline' => Carbon::now()->addDays(rand(0, 180)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
