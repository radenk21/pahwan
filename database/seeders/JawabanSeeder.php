<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use App\Models\Pertanyaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class JawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jawabans = [];
        $faker = Factory::create();
        $penggunaIds = Pengguna::pluck('id')->toArray();
        $pertanyaanIds = Pertanyaan::pluck('id')->toArray();

        for ($i = 1; $i <= 30; $i++) {
            $jawabans[] = [
                'pengguna_id'   => collect($penggunaIds)->random(),
                'pertanyaan_id' => collect($pertanyaanIds)->random(),
                'jawaban'       => $faker->sentence(200, 300),
                'created_at'    => now(),
                'updated_at'    => now(),
            ];
        }
        DB::table("jawabans")->insert($jawabans);
    }
}