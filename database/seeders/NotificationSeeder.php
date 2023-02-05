<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Notification;

class NotificationSeeder extends Seeder
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
                'title'  => 'Pembayaran',
                'description'   => 'pembayaran anda berhasil',
                'category' => 'PAYMENT',
                'user_id' => '1'
            ], [
                'id'    => 2,
                'title'  => 'Promo',
                'description'   => 'deskripsi promo',
                'category' => 'PROMO',
                'user_id' => ''
            ], [
                'id'    => 3,
                'title'  => 'Pembayaran',
                'description'   => 'pembayaran dibatalkan',
                'category' => 'PAYMENT',
                'user_id' => '1'
            ], [
                'id'    => 4,
                'title'  => 'Pembayaran',
                'description'   => 'segera lakukan pembayaran',
                'category' => 'PAYMENT',
                'user_id' => '3'
            ]
        ];

        Notification::insert($data);
    }
}