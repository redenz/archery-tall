<?php

use App\ArcherySession;
use App\User;
use Illuminate\Database\Seeder;

class ScoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();

        if (! $user) {
            (new UserSeeder())->run();
            $user = User::first();
        }

        $user->archerySessions()->create([
            'name' => 'Test Session',
        ]);

        $user->archerySessions()->first()->scores()->create([
            'target' => 1,
            'distance' => 20,
            'score' => 12,
            'user_id' => $user->id,
        ]);
    }
}
