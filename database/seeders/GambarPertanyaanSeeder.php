<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;
use App\Models\Pertanyaan;

class GambarPertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gambars = [];
        $faker = Factory::create();
        $pertanyaanIds = Pertanyaan::pluck('id')->toArray();

        for ($i = 1; $i <= collect($pertanyaanIds)->count(); $i++) {
            $gambars[] = [
                'pertanyaan_id' => collect($pertanyaanIds)->random(),
                'gambar'        => $i . ".jpg",
            ];
        }
        DB::table("gambar_pertanyaans")->insert($gambars);
    }
}