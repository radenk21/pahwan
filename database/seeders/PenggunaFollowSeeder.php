<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;
use App\Models\Pengguna;

class PenggunaFollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $follows = [];
        $faker = Factory::create();
        $penggunaIds = Pengguna::pluck('id')->toArray();

        for ($i = 1; $i <= 10; $i++) {
            $follows[] = [
                'pengguna_id'           => collect($penggunaIds)->random(),
                'follow_to_pengguna_id' => collect($penggunaIds)->random(),
                'created_at'            => now(),
                'updated_at'            => now(),
            ];
        }
        DB::table("pengguna_follows")->insert($follows);
    }
}