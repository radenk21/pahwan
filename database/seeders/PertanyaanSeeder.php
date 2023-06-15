<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;
use App\Models\Kategori;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pertanyaans = [];
        $faker = Factory::create();
        $kategoriIds = Kategori::pluck('id')->toArray();
        $penggunaIds = Pengguna::pluck('id')->toArray();

        for ($i = 1; $i <= 30; $i++) {
            $pertanyaans[] = [
                'pertanyaan'  => $faker->sentence(rand(25, 30)),
                'kategori_id' => collect($kategoriIds)->random(),
                'pengguna_id' => collect($penggunaIds)->random(),
                'created_at'  => now(),
                'updated_at'  => now(),
            ];
        }
        DB::table("pertanyaans")->insert($pertanyaans);
    }
}