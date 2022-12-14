<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() { 
        User::truncate(); 
        $users = [ 
         [ 
           'name' => 'Admin',
           'email' => 'admin@gmail.com',
           'mobile' => '87076069831',
           'password' => '123456',
           'is_admin' => 'true',
         ],
         [
           'name' => 'User',
           'email' => 'user@gmail.com',
           'mobile' => '87076069831',
           'password' => '13456',
           'is_admin' => null,
         ],
          [
           'name' => 'Client',
           'email' => 'client@gmail.com',
           'mobile' => '87076069831',
           'password' => '13456',
           'is_admin' => null,
         ] 
       ];

       foreach($users as $user)
       {
           User::create([
            'name' => $user['name'],
            'email' => $user['email'],
            'mobile' => $user['mobile'],
            'password' => Hash::make($user['password'])
          ]);
        }

 }
}
