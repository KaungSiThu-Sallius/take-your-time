<?php

namespace Database\Seeders;

use App\Models\Conference;
use App\Models\Course;
use App\Models\CriteriaScholarship;
use App\Models\Fellowship;
use App\Models\Grant;
use App\Models\Job;
use App\Models\Master;
use App\Models\OppotunityPlace;
use App\Models\Other;
use App\Models\Phd;
use App\Models\Scholarship;
use App\Models\Undergraduate;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Scholarship::factory(15)->create();
        Undergraduate::factory(15)->create();
        Master::factory(15)->create();
        Phd::factory(15)->create();
        Fellowship::factory(15)->create();
        Grant::factory(15)->create();
        Conference::factory(15)->create();
        Course::factory(15)->create();
        Job::factory(15)->create();
        Other::factory(15)->create();
        User::create([
            'role' => 'admin',
            'name' => 'tyt_admin1',
            'email' => 'tyt_admin@gmail.com',
            'password' => Hash::make('tytAdmin'),
        ]);
        OppotunityPlace::factory(25)->create();
        CriteriaScholarship::factory(10)->create();
    }
}