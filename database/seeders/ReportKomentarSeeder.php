<?php

namespace Database\Seeders;

use App\Models\Komentar;
use App\Models\Pengguna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class ReportKomentarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reports = [];
        $faker = Factory::create();
        $penggunaIds = Pengguna::pluck('id')->toArray();
        $komentarIds = Komentar::pluck('id')->toArray();

        for ($i = 1; $i <= 10; $i++) {
            $reports[] = [
                'pengguna_id' => collect($penggunaIds)->random(),
                'komentar_id' => collect($komentarIds)->random(),
                'created_at'  => now(),
                'updated_at'  => now(),
            ];
        }
        DB::table("report_komentars")->insert($reports);
    }
}