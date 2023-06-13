<?php

namespace Database\Seeders;

use App\Models\Jawaban;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class GambarJawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gambars = [];
        $faker = Factory::create();
        $jawabanIds = Jawaban::pluck('id')->toArray();

        for ($i = 1; $i <= collect($jawabanIds)->count(); $i++) {
            $gambars[] = [
                'jawaban_id' => collect($jawabanIds)->random(),
                'gambar'     => $i . ".jpg",
            ];
        }
        DB::table("gambar_jawabans")->insert($gambars);
    }
}