<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use App\Models\Pertanyaan;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LikePertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $likes = [];
        $faker = Factory::create();
        $penggunaIds = Pengguna::pluck('id')->toArray();
        $pertanyaanIds = Pertanyaan::pluck('id')->toArray();

        for ($i = 1; $i <= 30; $i++) {
            $likes[] = [
                'pengguna_id' => collect($penggunaIds)->random(),
                'pertanyaan_id'  => collect($pertanyaanIds)->random(),
                'created_at'  => now(),
                'updated_at'  => now(),
            ];
        }
        DB::table("like_pertanyaans")->insert($likes);
    }
}
