<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Revangga Aji Pratama',
            'username' => 'revangga',
            'email' => 'revanggaajip2@gmail.com',
            'password' => bcrypt('vangga'),
        ]);
    }
}
