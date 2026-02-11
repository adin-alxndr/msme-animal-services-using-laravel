<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            [
                'id_produk' => 1,
                'nama_produk' => 'Royal Canin Adult Persian 400gr Makanan Kucing Dewasa Persia Dry',
                'foto' => 'uploads/8RXUIUDhTSP3vJ3RJQiU9LyTGrqHTwNhUR7xA9n5.jpg',
                'harga' => 59300,
                'link_shopee' => 'https://shopee.co.id/Royal-Canin-Adult-Persian-400gr-Makanan-Kucing-Dewasa-Persia-Dry-i.134593593.7437394305?sp_atk=c556513c-ec74-48fe-8f86-8cfa677e5fc5&xptdk=c556513c-ec74-48fe-8f86-8cfa677e5fc5',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id_produk' => 2,
                'nama_produk' => 'Susu Kucing Top Growth Sachet 30gr Kitten Baby Cat Milk 30 gram Non Growssy',
                'foto' => 'uploads/IvTn0765olUPMeA1BX5qqmKxPzhZP9bFQ3VMReTB.jpg',
                'harga' => 5000,
                'link_shopee' => 'https://shopee.co.id/Susu-Kucing-Top-Growth-Sachet-30gr-Kitten-Baby-Cat-Milk-30-gram-Non-Growssy-i.134593593.16498219353?sp_atk=64192b76-9405-4b13-9f52-5047e2868751&xptdk=64192b76-9405-4b13-9f52-5047e2868751',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id_produk' => 3,
                'nama_produk' => 'CAT SCRATCHER - MAINAN KUCING , GARUKAN KUCING , CAT SCRATCHING BOARD',
                'foto' => 'uploads/HbFsSdwtXdKbfKQ0yezuuHBYAgW4iSosE744P4gg.jpg',
                'harga' => 65000,
                'link_shopee' => 'https://shopee.co.id/CAT-SCRATCHER-MAINAN-KUCING-GARUKAN-KUCING-CAT-SCRATCHING-BOARD-i.134593593.6614933307?sp_atk=8a4a7931-888a-4c92-b051-dbf01dd95ccb&xptdk=8a4a7931-888a-4c92-b051-dbf01dd95ccb',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id_produk' => 4,
                'nama_produk' => 'Drontal Cat Obat Cacing Kucing 1 pil Obat Drontal Bayer',
                'foto' => 'uploads/wnQsRcdlq6l18Fo7SSSj212dGlq4ReeOhGkrxGyO.jpg',
                'harga' => 28000,
                'link_shopee' => 'https://shopee.co.id/Drontal-Cat-Obat-Cacing-Kucing-1-pil-Obat-Drontal-Bayer-i.134593593.5429397017?sp_atk=262ed78f-65ce-417a-8709-b3cb116231d3&xptdk=262ed78f-65ce-417a-8709-b3cb116231d3',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id_produk' => 5,
                'nama_produk' => 'COLLAR KEPITING Cone Corong Pelindung Anjing Kucing - Anti-licking Collar, Pet Recovery Collar Cat & Dog',
                'foto' => 'uploads/tlxbiEjv69sASep5pH0EZ33EIWFtod1hX06Ltyak.jpg',
                'harga' => 65000,
                'link_shopee' => 'https://shopee.co.id/COLLAR-KEPITING-Cone-Corong-Pelindung-Anjing-Kucing-Anti-licking-Collar-Pet-Recovery-Collar-Cat-Dog-i.134593593.21676539133?sp_atk=1d8eba9f-6c6b-45d8-a65e-9aa4d0c37de6',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id_produk' => 6,
                'nama_produk' => 'SEROKAN PASIR KUCING HAMSTER ANJING AKSESORIS KANDANG PUP SCOOP PASIR CAT LITTER SCOOP',
                'foto' => 'uploads/jgmMJXftYFfyFVUK96XIKThBv1aVirw0KmXoBEtl.jpg',
                'harga' => 10000,
                'link_shopee' => 'https://shopee.co.id/SEROKAN-PASIR-KUCING-HAMSTER-ANJING-AKSESORIS-KANDANG-PUP-SCOOP-PASIR-CAT-LITTER-SCOOP-i.134593593.2796341511?sp_atk=9c6e092e-a16c-468b-b7fb-2994b4ab6b6d&xptdk=9c6e092e-a16c-468b-b7fb-2994b4ab6b6d',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id_produk' => 7,
                'nama_produk' => 'GROSIR UNDERPAD ukuran S',
                'foto' => 'uploads/EnoDnKErvNfaJn94ZLKqBSmRzR4wjsuclHkTj23X.jpg',
                'harga' => 3000,
                'link_shopee' => 'https://shopee.co.id/GROSIR-UNDERPAD-ukuran-S-i.134593593.3839521243?sp_atk=a598ed77-e66e-4ea0-8915-c0725478efd3&xptdk=a598ed77-e66e-4ea0-8915-c0725478efd3',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id_produk' => 8,
                'nama_produk' => 'Catch Shampo Kucing Anti Kutu 2in1 - Basmi Kutu & Larva 3,7x Lebih Efektif Hingga Tuntas',
                'foto' => 'uploads/bvUbXIxfv0cf9nFieeGzfQPBvwlA4Y7z6Kbzcgmh.jpg',
                'harga' => 79000,
                'link_shopee' => 'https://shopee.co.id/Catch-Shampo-Kucing-Anti-Kutu-2in1-Basmi-Kutu-Larva-3-7x-Lebih-Efektif-Hingga-Tuntas-i.134593593.23783136262?sp_atk=67d4dc6b-1a24-49c7-b6ca-c72aa7af9183&xptdk=67d4dc6b-1a24-49c7-b6ca-c72aa7af9183',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id_produk' => 9,
                'nama_produk' => 'KOSTUM DOKTER / PET COSTUME DOCTOR',
                'foto' => 'uploads/dxo9Ihw6Wz8cJG7fp4PB0IibEzefTffgX54cxzj5.jpg',
                'harga' => 125000,
                'link_shopee' => 'https://shopee.co.id/KOSTUM-DOKTER-PET-COSTUME-DOCTOR-i.134593593.2796540596?sp_atk=cbf58ecd-8760-4f98-81a6-fd2a44064839',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('produk')->insert($data);
    }
}
