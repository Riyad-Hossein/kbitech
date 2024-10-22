<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = array(
            array(
                'id' => '1',
                'first_name' => 'Admin',
                'last_name' => '',
                'phone' => '01680651229',
                'email' => 'admin@gmail.com',
                'username'=> '',
                'user_type' => 0,
                'password' => bcrypt('123456'),
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            )
         );

         foreach ($users as $user) {
            User::create([
             'id' => $user['id'],
             'first_name' => $user['first_name'],
             'last_name' => $user['last_name'],
             'phone' => $user['phone'],
             'email' => $user['email'],
             'username' => $user['username'],
             'password' => $user['password'],
             'user_type' => $user['user_type'],
             'email_verified_at' => $user['email_verified_at'],
             'created_at' => $user['created_at'],
             'updated_at' => $user['updated_at']
           ]);
        }
    }
}
