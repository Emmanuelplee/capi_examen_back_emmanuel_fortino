<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDomicilio;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory()
        ->count(100)
        ->create();
        // ->each(function ($user) {
        //     $user->userDomicilio()->save(UserDomicilio::factory()->make());
        // });
        foreach ($users as $key => $v) {
            $v->userDomicilio()->save(UserDomicilio::factory()->make());
        }
    }
}
