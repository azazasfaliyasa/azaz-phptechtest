<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
// use Illuminate\Support\Facades\DB;
use DB;

class UserSeeder extends Seeder
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
                'name'  => 'diki',
                'age'   => '24'
            ], [
                'id'    => 2,
                'name'  => 'indra',
                'age'   => '28'

            ], [
                'id'    => 3,
                'name'  => 'feby',
                'age'   => '21'
            ]
        ];

        User::insert($data);
    }
}