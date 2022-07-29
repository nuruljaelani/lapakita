<?php

namespace Database\Seeders;

use App\Models\Kabupaten;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Kabupaten::truncate();

        $json = File::get("database/data/kabupaten/94.json");
        $kabupaten = json_decode($json);

        foreach ($kabupaten as $key => $value) {
            Kabupaten::create([
                'id' => $value->id,
                'provinsi_id' => 94,
                'name' => $value->nama
            ]);
        }
    }
}
