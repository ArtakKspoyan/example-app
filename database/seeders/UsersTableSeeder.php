<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create(array(
            'name' => 'Alex',
            'email' => 'alexwsears@gmail.com',
            'password' => Hash::make('alexsears')
        ));

        User::create(array(
            'name' => 'George',
            'email' => 'george@foreman.com',
            'password' => Hash::make('georgeforeman')
        ));

        User::create(array(
            'name' => 'Tony',
            'email' => 'tony@thetiger.com',
            'password' => Hash::make('tonytiger')
        ));

        User::create(array(
            'name' => 'Fred',
            'email' => 'fred@flintstone.com',
            'password' => Hash::make('fredflintstone')
        ));
        User::create(array(
            'name' => 'Miki',
            'email' => 'miki@foreman.com',
            'password' => Hash::make('georgeforeman')
        ));

        User::create(array(
            'name' => 'Anya',
            'email' => 'anya@thetiger.com',
            'password' => Hash::make('tonytiger')
        ));

        User::create(array(
            'name' => 'Viloeta',
            'email' => 'violeta@flintstone.com',
            'password' => Hash::make('fredflintstone')
        ));
    }
}
