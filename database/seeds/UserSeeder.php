<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->delete();

        $users = [
            [
                'name' => 'Super Admin',
                'email' => 'admin@aware.co.th',
                'password' => Hash::make('p@ssw0rd')
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        Model::reguard();
    }
}
