<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Shakil',
            'last_name'  => 'Khan',
            'email'      => 'shakilkhan!@gmail.com',
        ]);

        $this->call(JobSeeder::class);
    }
}
