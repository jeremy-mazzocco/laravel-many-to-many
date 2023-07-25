<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $projects = Project::factory()->count(10)->make();

        foreach ($projects as $project) {

            $type = Type::inRandomOrder()->first();

            $project->type_id = $type->id;
            $project->save();
        }
    }
}
