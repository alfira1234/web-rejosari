<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Paket;
use App\Models\Kategori;
use App\Models\Jns_paket;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'email' => 'alfira@gmail.com',
        //     'name' => 'alfira',
        //     'password' => 'qwertyuiop'
        // ]);

        Jns_paket::create([
            'jns_paket' => 'Keluarga',
            'diskon' => '0.05'
        ]);
        Jns_paket::create([
            'jns_paket' => 'Pelajar',
            'diskon' => '0.1'
        ]);
        Jns_paket::create([
            'jns_paket' => 'Personal',
            'diskon' => '0',
        ]);


        kategori::create([
            'kategori' => 'Alam'
        ]);
        kategori::create([
            'kategori' => 'Peternakan'
        ]);
        kategori::create([
            'kategori' => 'Pertanian'
        ]);

        // Paket::create([
        //     'name' => 'Edukasi Ternak Kambing',
        //     'harga' => '20000',
        //     'fasilitas' => 'snack',
        //     'kategori' => '2',
        //     'destinasi' => '20000',
        //     'lokasi' => '20000',
        //     'luas' => '20000',
        //     'deskripsi' => '20000',
        // ]);
        // Paket::create([
        //     'name' => ' Wisata Alam Lanscape',
        //     'harga' => '30000',
        //     'fasilitas' => 'snack',
        //     'kategori' => '1',
        //     'destinasi' => '20000',
        //     'lokasi' => '20000',
        //     'luas' => '20000',
        //     'deskripsi' => '20000',
        // ]);
        // Paket::create([
        //     'name' => 'Edukasi Tanam durian',
        //     'harga' => '40000',
        //     'fasilitas' => 'snack',
        //     'kategori' => '3',
        //     'destinasi' => '20000',
        //     'lokasi' => '20000',
        //     'luas' => '20000',
        //     'deskripsi' => '20000',
        // ]);
        // Paket::create([
        //     'name' => 'Edukasi Tanam Jamur',
        //     'harga' => '35000',
        //     'fasilitas' => 'snack',
        //     'kategori' => '3',
        //     'destinasi' => '20000',
        //     'lokasi' => '20000',
        //     'luas' => '20000',
        //     'deskripsi' => '20000',
        // ]);
        // Paket::create([
        //     'name' => 'Edukasi Kincir Air',
        //     'harga' => '15000',
        //     'fasilitas' => 'snack',
        //     'kategori' => '1',
        //     'destinasi' => '20000',
        //     'lokasi' => '20000',
        //     'luas' => '20000',
        //     'deskripsi' => '20000',
        // ]);
    }
}
