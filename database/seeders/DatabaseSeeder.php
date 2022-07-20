<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Home;
use App\Models\User;
use App\Models\About;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name' => 'Wira Bhakti',
            'email' => 'wirbhak@gmail.com',
            'password' => bcrypt(12345)
        ]);
        Home::create([   
            'judul' => 'Bimbel Persiapan Kedinasan, AKPOL dan AKMIL',
            'deskripsi' => 'Bimbel  bhakti goblog dengan metode pembelajaran terbaik serta mentor terlatih dan professional.',
            'foto' => 'assets/assets/img/kedinasan.png',
            'tombol' => 'Daftar Sekarang',
            'link' => 'https://drive.google.com/drive/folders/1oWzBM6u8GquqwGwvaeXbuoUrGpxoKjhr',
            ]);
            About::create([   
                'foto' => 'storage/foto-about/F5Q2G7lBBdDwqvojkdktEJbmKZEzA15eEkPgzAfP.png',
                'deskripsi' => 'Bimbel  bhakti goblog dengan metode pembelajaran terbaik serta mentor terlatih dan professional.',
                'instagram' => '@aryagammaacademy',
                'no_wa' => '85155436197',
                'email' => 'aryagamma@gmail.com',
                'alamat' => 'Jalan kemuning regency',
                ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
