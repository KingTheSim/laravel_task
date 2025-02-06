<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Button;

class ButtonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 9; $i++) {
            Button::create([
                'title' => '' . ($i + 1),
                'link' => '#',
                'color' => 'gray',
                'set' => false,
            ]);
        }
    }
}
