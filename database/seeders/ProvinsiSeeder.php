<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provinsi::truncate();

        $json = File::get("database/data/provinsi.json");
        $provinsi = json_decode($json);

        foreach ($provinsi as $key => $value) {
            Provinsi::create([
                'id' => $value->id,
                'name' => $value->nama
            ]);
        }
    }
}
