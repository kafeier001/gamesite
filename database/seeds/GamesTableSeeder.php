<?php
// database/seeds/GamesTableSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Game;

class GamesTableSeeder extends Seeder
{
    public function run()
    {
        Game::create([
            'title' => 'Example Game',
            'description' => 'This is an example game description.',
        ]);
    }
}