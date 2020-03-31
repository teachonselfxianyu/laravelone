<?php

use Illuminate\Database\Seeder;
use App\AdminUser;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
          AdminUser::create([
            'username' => 'admin',
             'password' => Hash::make('admin'),
             'state' => AdminUser::NORMAL,
          ]);
        
    }
      
}
