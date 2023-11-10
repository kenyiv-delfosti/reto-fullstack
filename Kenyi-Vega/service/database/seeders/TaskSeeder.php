<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'title' => 'Tarea de ejemplo 1',
            'description' => 'Descripción de tarea 1',
            'state' => 'pendiente',
        ]);

        Task::create([
            'title' => 'Tarea de ejemplo 2',
            'description' => 'Descripción de tarea 2',
            'state' => 'en progreso',
        ]);

        Task::create([
            'title' => 'Tarea de ejemplo 3',
            'description' => 'Descripción de tarea 3',
            'state' => 'completada',
        ]);
    }
}
