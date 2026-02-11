<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GroomingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            [
                'timestamp' => $now,
                'id_grooming' => '1',
                'nama_owner' => 'Owner 1',
                'nama_anabul' => 'Anabul 1',
                'jenis' => 'Grooming Jamur',
                'tipe' => 'Short Hair',
                'tanggal' => '2024-03-06',
                'jam' => '15:00 WIB',
                'status' => 'Menunggu...',
                'kode_reservasi' => 'GRo8AN',
            ],
            [
                'timestamp' => $now,
                'id_grooming' => '2',
                'nama_owner' => 'Owner 2',
                'nama_anabul' => 'Anabul 2',
                'jenis' => 'Grooming Treatment Whitening',
                'tipe' => 'Long Hair',
                'tanggal' => '2024-03-21',
                'jam' => '17:00 WIB',
                'status' => 'Menunggu...',
                'kode_reservasi' => 'GRzG2G',
            ],
            [
                'timestamp' => $now,
                'id_grooming' => '3',
                'nama_owner' => 'Owner 3',
                'nama_anabul' => 'Anabul 3',
                'jenis' => 'Grooming Lengkap Medis',
                'tipe' => 'Short Hair',
                'tanggal' => '2024-03-06',
                'jam' => '13:00 WIB',
                'status' => 'Menunggu...',
                'kode_reservasi' => 'GRPJJy',
            ],
        ];

        DB::table('grooming')->insert($data);
    }
}
