<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
    */

    public function run(): void
    {
        //
        DB::table('admin_roles')->insert([
            [
                'role_name' => 'Super Admin',
                'role_description' => 'Super Admins have full access to all features and functionalities of the admin panel.'
            ],
            [
                'role_name' => 'Moderator',
                'role_description' => 'Moderators have the ability to manage and moderate user-generated content, such as approving or deleting posts, comments, or images.'
            ],
            [
                'role_name' => 'Content Editor',
                'role_description' => 'Content Editors are responsible for creating, editing, and managing content on the platform, such as articles, blog posts, or product descriptions.'
            ],
            [
                'role_name' => 'Customer Support',
                'role_description' => 'Customer Support roles are tasked with assisting users with inquiries, troubleshooting issues, and providing support via email, chat, or phone.'
            ],
            [
                'role_name' => 'Analytics Specialist',
                'role_description' => 'Analytics Specialists analyze data and metrics to provide insights and recommendations for improving the platform`s performance, user engagement, and business objectives.'
            ],
        ]);
    }
}
