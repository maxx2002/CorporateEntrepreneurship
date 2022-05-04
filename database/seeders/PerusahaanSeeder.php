<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perusahaan')->insert([
            'logo_path' => 'a',
            'nama_perusahaan' => 'PT Superior Prima Sukses (BLESSCON)',
            'deskripsi_singkat' => 'PT Superior Prima Sukses adalah perusahaan yang bergerak dalam bidang industri manufaktur bata ringan dengan merek BLESSCON. PT Superior Prima Sukses merupakan bagian dari SPS Corporate yang telah memiliki pengalaman lebih dari 40 tahun dalam dunia usaha, seperti manufaktur kertas tissue, kertas coklat, carton box, power plant, dan properti.',
            'visi_misi' => '“Membangun suatu organisasi global yang bertumbuh secara berkesinambungan oleh anugerah Tuhan, mewariskan dampak turun temurun, serta senantiasa menjadi saluran berkat bagi seluruh stakeholder”.',
            'website_resmi' => 'https://blessconbataringan.com/'
        ]);
        DB::table('perusahaan')->insert([
            'logo_path' => 'a',
            'nama_perusahaan' => 'INDOMARET GROUP',
            'deskripsi_singkat' => 'Indomaret adalah jaringan mini market waralaba di Indonesia. Mini market ini menyediakan berbagai macam kebutuhan pokok dan kebutuhan sehari-hari. Indomaret sangat mudah ditemukan di daerah  perumahan, gedung perkantoran dan fasilitas umum karena penempatan lokasi gerai didasarkan pada motto “mudah dan hemat”.',
            'visi_misi' => 'Menjadi aset nasional dalam bentuk jaringan ritel waralaba yang unggul dalam persaingan global.',
            'website_resmi' => 'https://indomaret.co.id/'
        ]);
        DB::table('perusahaan')->insert([
            'logo_path' => 'a',
            'nama_perusahaan' => 'VOOYA',
            'deskripsi_singkat' => 'Vooya adalah perusahaan edukasi berbasis passion yang bertujuan untuk membantu generasi muda Indonesia menemukan passion mereka dan memiliki kehidupan yang bertujuan. Bagi Vooya, passion adalah pendorong terkuat di balik kesuksesan dan kebahagiaan semua orang di dunia.',
            'visi_misi' => 'A leader in passion education industry to help curious minds reach their future dream and live a fulfilling happy life.',
            'website_resmi' => 'https://www.vooya.id/'
        ]);
    }
}
