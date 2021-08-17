<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User([
            'firstName' => 'Eric',
            'lastName' => 'Craigen',
            'streetAddress1' => '4216 N McDonald Road',
            'streetAddress2' => 'F 102',
            'city' => 'Spokane Valley',
            'state' => 'WA',
            'zip' => '99216',
            'email' => 'eric.craigen.cd@gmail.com',
            'password' => Hash::make('L3v1athan!!'),
            'email_verified_at' => now(),

        ]);
        $user->save();

        $user = new User([
            'firstName' => 'Jamie',
            'lastName' => 'Gould',
            'streetAddress1' => '4216 N McDonald Road',
            'streetAddress2' => 'F 102',
            'city' => 'Spokane Valley',
            'state' => 'WA',
            'zip' => '99216',
            'email' => 'phirephox89@gmail.com',
            'password' => Hash::make('Gould1eLox'),
            'email_verified_at' => now(),

        ]);
        $user->save();
    }
}
