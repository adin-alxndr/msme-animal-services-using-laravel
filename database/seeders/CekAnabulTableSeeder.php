<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CekAnabulTableSeeder extends Seeder
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
                'nama_owner' => 'Owner 1',
                'nama_anabul' => 'Anabul 1',
                'sesi' => '11:30-13:30',
                'tanggal' => '2024-03-04',
                'catatan' => 'Kucing perlu vaksinasi rabies',
                'status' => 'Menunggu...',
                'kode_reservasi' => 'CAmZZg',
            ],
            [
                'timestamp' => $now,
                'nama_owner' => 'Owner 2',
                'nama_anabul' => 'Anabul 2',
                'sesi' => '13:00-15:00',
                'tanggal' => '2024-03-08',
                'catatan' => 'Check up rutin bulanan',
                'status' => 'Menunggu...',
                'kode_reservasi' => 'CAm3wt',
            ],
            [
                'timestamp' => $now,
                'nama_owner' => 'Owner 3',
                'nama_anabul' => 'Anabul 3',
                'sesi' => '15:00-16:30',
                'tanggal' => '2024-03-22',
                'catatan' => 'Flu sudah 4 hari, mual dan muntah',
                'status' => 'Menunggu...',
                'kode_reservasi' => 'CAErZq',
            ],
        ];

        DB::table('cek_anabul')->insert($data);
    }
}
