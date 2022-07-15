<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Home;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Home::create([   
            'judul' => 'Bimbel Persiapan Kedinasan, AKPOL dan AKMIL',
            'deskripsi' => 'Bimbel  bhakti goblog dengan metode pembelajaran terbaik serta mentor terlatih dan professional.',
            'foto' => 'assets/assets/img/kedinasan.png',
            'tombol' => 'Daftar Sekarang',
            'link' => 'https://drive.google.com/drive/folders/1oWzBM6u8GquqwGwvaeXbuoUrGpxoKjhr',
            ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
