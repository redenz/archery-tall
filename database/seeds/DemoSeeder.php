<?php

use App\ArcherySession;
use App\User;
use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(User::class)->create([
            'name' => 'George Redenz',
            'email' => 'redenz@gmail.com',
            'password' => bcrypt('testing'),
        ]);

        $session = factory(ArcherySession::class)->create([
            'name' => 'Demo Session',
            'user_id' => $user->id,
        ]);

        $session->scores()->create(
            [
                'target' => 1,
                'user_id' => $user->id,
                'distance' => 40,
                'score' => 10,
            ]
        );
    }
}
