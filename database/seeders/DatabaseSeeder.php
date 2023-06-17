<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(PenggunaSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(PertanyaanSeeder::class);
        $this->call(GambarPertanyaanSeeder::class);
        $this->call(ReportPertanyaanSeeder::class);
        $this->call(JawabanSeeder::class);
        $this->call(ArsipSeeder::class);
        $this->call(GambarJawabanSeeder::class);
        $this->call(ReportJawabanSeeder::class);
        $this->call(KomentarSeeder::class);
        $this->call(ReportKomentarSeeder::class);
        $this->call(PenggunaFollowSeeder::class);
        $this->call(LikeJawabanSeeder::class);
        $this->call(LikeKomentarSeeder::class);
        $this->call(LikePertanyaanSeeder::class);
    }
}