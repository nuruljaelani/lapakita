<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
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
                'name' => 'user',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'seller',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'admin',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'superadmin',
                'created_at' => Carbon::now()
            ],
        ];

        DB::table('roles')->insert($data);
    }
}
