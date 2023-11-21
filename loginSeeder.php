<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\login;

class loginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        login::create([
            'username' => 'syafrina',
            'password' => 'Nimasyari',
        ]);
    }
}
