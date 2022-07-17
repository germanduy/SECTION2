<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\Student;
use App\Models\Subject;
use Database\Factories\StudentFactory;
use Database\Factories\SubjectFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
//        Classes::factory(10)->create();
//        Subject::factory(20)->create();
//        Subject::factory(50)->create();
        Student::factory(50)->create();
    }
}
