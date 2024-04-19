<?php

namespace Database\Seeders;
use App\Models\persona;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class personaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
     persona::factory(30)->create();
    }
}
