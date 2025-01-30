<?php

namespace Database\Seeders;

use App\Models\AsalGereja;
use App\Models\Gereja;
use App\Models\Keanggotaan;
use App\Models\Pengumuman;
use App\Models\Transaksi;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Gereja instances
        $gereja = Gereja::factory()->create([
            'nama' => 'Gereja Baptis Imanuel Indonesia',
            'alamat' => 'Jl. Minahasa - Tompaso, Tempok, Kec. Tompaso, Kabupaten Minahasa, Sulawesi Utara 95693',
            'kontak' => '082293967401',
        ]);

        User::factory()->create([
            'id_gereja' => $gereja->id,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password123'),
            'remember_token' => Str::random(10),
        ]);
    }
}
