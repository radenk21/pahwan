<?php

namespace Database\Seeders;

use App\Models\Jawaban;
use App\Models\Pengguna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class LikeJawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $likes = [];
        $faker = Factory::create();
        $penggunaIds = Pengguna::pluck('id')->toArray();
        $jawabanIds = Jawaban::pluck('id')->toArray();

        for ($i = 1; $i <= 10; $i++) {
            $likes[] = [
                'pengguna_id' => collect($penggunaIds)->random(),
                'jawaban_id'  => collect($jawabanIds)->random(),
                'created_at'  => now(),
                'updated_at'  => now(),
            ];
        }
        DB::table("like_jawabans")->insert($likes);
    }
}