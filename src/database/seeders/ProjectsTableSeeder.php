<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 27; $i++)
        {
            $user_id = ceil($i / 3);
            $param = [
                'projectName' => 'テストプロジェクト' . $i,
                'description' => 'これは' . $i . '個目のプロジェクトです。',
                'created_by' => $user_id
            ];
            DB::table('projects')->insert($param);
        }
    }
}
