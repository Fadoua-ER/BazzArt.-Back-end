<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminMessageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     *  @return void
    */

    public function run(): void
    {
        //
        DB::table('admin_message_types')->insert([
            [
                'type_name' => 'New Information',
                'type_description' => 'This message contains new information or updates for the user`s profile, such as changes in policies, new features, or announcements.'
            ],
            [
                'type_name' => 'Warning',
                'type_description' => 'This message serves as a warning to the user, indicating that they may be in violation of site policies, guidelines, or terms of service. It alerts them to take corrective action or face consequences.'
            ],
            [
                'type_name' => 'Reminder',
                'type_description' => 'This message reminds the user about pending tasks, deadlines, or upcoming events related to their profile or activities on the platform.'
            ],
            [
                'type_name' => 'Congratulations',
                'type_description' => 'This message congratulates the user for achieving a milestone, such as completing a task, reaching a goal, or receiving recognition.'
            ],
            [
                'type_name' => 'Feedback Request',
                'type_description' => 'This message requests feedback from the user, asking for their opinion, suggestions, or comments on their experience with the platform or specific features.'
            ],
            [
                'type_name' => 'Security Alert',
                'type_description' => 'This message alerts the user about potential security risks or suspicious activities related to their account, urging them to take immediate action to secure their profile.'
            ],
            [
                'type_name' => 'Promotion',
                'type_description' => 'This message notifies the user about promotional offers, discounts, or special deals available on the platform, encouraging them to take advantage of these opportunities.'
            ],
            [
                'type_name' => 'Survey',
                'type_description' => 'This message invites the user to participate in a survey or questionnaire to gather feedback, opinions, or insights for improving the platform`s services or features.'
            ],
            [
                'type_name' => 'Maintenance Notice',
                'type_description' => 'This message informs the user about scheduled maintenance or downtime on the platform, providing details about the duration and impact on their usage.'
            ],
        ]);
    }
}
