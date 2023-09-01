<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Create an Super Admin user
         $superadmin = User::create([
            'name' => 'Moshin Gyagenda',
            'email' => 'moshingyagenda7@gmail.com',
            'username'=>'mosh',
            'user_type'=>'super-admin',
            'contact'=>'0701861283',
            'password' => Hash::make('moshin@2020'),
        ]);
        $superadmin->assignRole('super-admin');
        // Create an school-admin user
        $admin = User::create([
            'name' => 'Ssenkungu Noah',
            'email' => 'ssenkungunoah@gmail.com',
            'username'=>'noah',
            'user_type'=>'school-admin',
            'contact'=>'0758001270',
            'password' => Hash::make('noah@2020'),
        ]);
        $admin->assignRole('school-admin');
    }
}
