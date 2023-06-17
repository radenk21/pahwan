<?php

namespace Database\Seeders;

use App\Models\Komentar;
use App\Models\Pengguna;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LikeKomentarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $likes = [];
        $faker = Factory::create();
        $penggunaIds = Pengguna::pluck('id')->toArray();
        $komentarIds = Komentar::pluck('id')->toArray();

        for ($i = 1; $i <= 30; $i++) {
            $likes[] = [
                'pengguna_id' => collect($penggunaIds)->random(),
                'komentar_id'  => collect($komentarIds)->random(),
                'created_at'  => now(),
                'updated_at'  => now(),
            ];
        }
        DB::table("like_komentars")->insert($likes);
    }
}
