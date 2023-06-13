<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoris = [];
        $faker = Factory::create();

        for ($i = 1; $i <= 5; $i++) {
            $kategoris[] = [
                'kategori'   => "kategori" . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table("kategoris")->insert($kategoris);
    }
}