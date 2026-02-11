<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HotelTableSeeder extends Seeder
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
                'id_hotel' => '1',
                'nama_owner' => 'Owner 1',
                'nama_anabul' => 'Anabul 1',
                'jenis' => 'VIP Room',
                'tgl_antar' => '2024-03-04',
                'tgl_jemput' => '2024-03-14',
                'jam_antar' => '14:00 WIB',
                'jam_jemput' => '18:00 WIB',
                'status' => 'Menunggu...',
                'kode_reservasi' => 'HO7dV8',
            ],
            [
                'timestamp' => $now,
                'id_hotel' => '2',
                'nama_owner' => 'Owner 2',
                'nama_anabul' => 'Anabul 2',
                'jenis' => 'Deluxe Room',
                'tgl_antar' => '2024-03-15',
                'tgl_jemput' => '2024-03-16',
                'jam_antar' => '20:00 WIB',
                'jam_jemput' => '16:00 WIB',
                'status' => 'Menunggu...',
                'kode_reservasi' => 'HOJf7W',
            ],
            [
                'timestamp' => $now,
                'id_hotel' => '3',
                'nama_owner' => 'Owner 3',
                'nama_anabul' => 'Anabul 3',
                'jenis' => 'Standard Room',
                'tgl_antar' => '2024-03-12',
                'tgl_jemput' => '2024-03-13',
                'jam_antar' => '13:00 WIB',
                'jam_jemput' => '14:00 WIB',
                'status' => 'Menunggu...',
                'kode_reservasi' => 'HOqIB8',
            ],
        ];

        DB::table('hotel')->insert($data);
    }
}
