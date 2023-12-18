<?php

use App\User;
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
        $admin = User::firstOrCreate([
            'email' => 'admin@role.id',
        ], [
            'name' => 'Admin',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');

        $user = User::firstOrCreate([
            'email' => 'user@role.id',
        ], [
            'name' => 'User',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('user');

        $organizer = User::firstOrCreate([
            'email' => 'organizer@role.id',
        ], [
            'name' => 'Organizer',
            'password' => bcrypt('12345678'),
        ]);

        $organizer->assignRole('organizer');
    }
}
