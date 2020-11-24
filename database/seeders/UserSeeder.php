<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use\App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user =new User();
        $user->name = 'lala';
        $user->email = 'lala123@gmail.com';
        $user->password = '$2y$10$/ANNnt4ciTrXgvsKX4t0GeWBitudZ3U4sUZoSFACkP7vuIT8MGFBq';
        $user->role_id = 1;
        $user->save();
    }
}
