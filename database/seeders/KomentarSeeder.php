<?php

namespace Database\Seeders;

use App\Models\Jawaban;
use App\Models\Pengguna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class KomentarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $komentars = [];
        $faker = Factory::create();
        $penggunaIds = Pengguna::pluck('id')->toArray();
        $jawabanIds = Jawaban::pluck('id')->toArray();

        for ($i = 1; $i <= 10; $i++) {
            $komentars[] = [
                'pengguna_id' => collect($penggunaIds)->random(),
                'jawaban_id'  => collect($jawabanIds)->random(),
                'komentar'    => $faker->sentence(rand(20, 30)),
                'created_at'  => now(),
                'updated_at'  => now(),
            ];
        }
        DB::table("komentars")->insert($komentars);
    }
}