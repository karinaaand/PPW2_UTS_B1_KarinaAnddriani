<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pemain;


class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pemain::create([
            'nama_pemain' => 'Malik',
            'no_punggung' => 10,
            'posisi' => 'Striker'
        ]);

        Pemain::create([
            'nama_pemain' => 'Imannuel',
            'no_punggung' => 7,
            'posisi' => 'Winger'
        ]);

        Pemain::create([
            'nama_pemain' => 'Rifat',
            'no_punggung' => 4,
            'posisi' => 'Defender'
        ]);

        Pemain::create([
            'nama_pemain' => 'Ilham',
            'no_punggung' => 4,
            'posisi' => 'Defender'
        ]);

        Pemain::create([
            'nama_pemain' => 'Eka',
            'no_punggung' => 4,
            'posisi' => 'Winger'
        ]);
    }
}
