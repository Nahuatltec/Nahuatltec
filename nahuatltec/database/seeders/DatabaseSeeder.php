<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = new User;
        $user->age='20';
        $user->name='Admin';
        $user->email='20191204@uthh.edu.mx';
        $user->password='admin';
        $user->role='admin';
        $user->save();
    }

}
