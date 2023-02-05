<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NotificationRead;

class NotificationReadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id'    => 1,
                'is_read'  => '1',
                'notification_id'   => '1',
                'user_id' => '1',
                'created_at' => GETDATE()
            ], [
                'id'    => 2,
                'is_read'  => '1',
                'notification_id'   => '2',
                'user_id' => '1'
            ], [
                'id'    => 3,
                'is_read'  => '1',
                'notification_id'   => '3',
                'user_id' => '3'
            ], [
                'id'    => 4,
                'is_read'  => '1',
                'notification_id'   => '3',
                'user_id' => '2'
            ]
        ];

        NotificationRead::insert($data);
    }
}