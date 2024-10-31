<?php

namespace Database\Seeders;

use App\Models\Notebook;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Создание 100 объектов Notebook
        Notebook::factory()->count(20)->create();
    }
}
