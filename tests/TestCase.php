<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Mix;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use UserSeeder;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();

        // Swap out the Mix manifest implementation, so we don't need
        // to run the npm commands to generate a manifest file for
        // the assets in order to run tests that return views.
        $this->swap(Mix::class, function () {
            return '';
        });
    }

    protected function login()
    {
        if (User::count() == 0) {
            $this->seed(UserSeeder::class);
        }

        $user = User::first();

        $this->actingAs($user);
    }
}
