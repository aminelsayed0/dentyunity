<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        \App\Models\Doctor::factory(20)->create();
        \App\Models\Patient::factory(20)->create();
        \App\Models\DescribedCase::factory(20)->create();
        \App\Models\ToolForm::factory(20)->create();
        \App\Models\Questions::factory(20)->create();
        \App\Models\UnDescribedCase::factory(20)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'test@example.com',
            'password'=> '12345678'
        ]);
    }
}
