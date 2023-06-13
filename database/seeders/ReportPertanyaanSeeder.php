<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use App\Models\Pertanyaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class ReportPertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $report = [];
        $faker = Factory::create();
        $pengunaIds = Pengguna::pluck('id')->toArray();
        $pertanyaanIds = Pertanyaan::pluck('id')->toArray();

        for ($i = 1; $i <= 4; $i++) {
            $report[] = [
                'pengguna_id'   => collect($pengunaIds)->random(),
                'pertanyaan_id' => collect($pertanyaanIds)->random(),
                'created_at'    => now(),
                'updated_at'    => now(),
            ];
        }
        DB::table("report_pertanyaans")->insert($report);
    }
}