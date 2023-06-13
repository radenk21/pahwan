<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [];
        $faker = Factory::create();

        for ($i = 1; $i <= 10; $i++) {
            $users[] = [
                'nama'         => $faker->name,
                'jenisKelamin' => $faker->randomElement($array = array('pria', 'wanita')),
                'nomorTelepon' => $faker->phoneNumber,
                'gambar'       => $i . ".png",
                'email'        => $faker->email,
                'password'     => bcrypt("12345678"),
                'role'         => $faker->randomElement($array = array('admin', 'user')),
                'is_ban'       => 0,
                'created_at'   => now(),
                'updated_at'   => now(),
            ];
        }
        DB::table("penggunas")->insert($users);
    }
}