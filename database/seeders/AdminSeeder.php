<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    
    public function run(): void
    {
        //
        $superAdminRoleId = DB::table('admin_roles')->where('role_name', 'Super Admin')->value('role_id');
        DB::table('administrators')->insert([
            'email' => 'bazzartforartsellers@gmail.com',
            'phone_number' => '+212689600528',
            'role' => $superAdminRoleId,
            'password' => Hash::make('bazzartpassword')
        ]);
    }
}
