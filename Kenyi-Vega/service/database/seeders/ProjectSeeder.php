<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'title' => 'Proyecto de Ejemplo 1',
        ]);

        Project::create([
            'title' => 'Proyecto de Ejemplo 2',
        ]);
    }
}
