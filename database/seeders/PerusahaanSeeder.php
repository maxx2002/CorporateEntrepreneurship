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
            'id_perusahaan' => 'CaravanStudio',
            'logo_path' => 'img/perusahaan/caravanstudio.webp',
            'nama_perusahaan' => 'Caravan Studio',
            'deskripsi_singkat' => 'Caravan Studio didirikan awal tahun 2008 oleh Christiawan Lie (Chris Lie). Caravan merupakan sebuah studio art outsourcing kelas dunia dengan pengalaman lebih dari 10 tahun membuat desain dan ilustrasi untuk perusahaan di dunia, seperti Marvel Comics, Wizard of the Coast, Hasbro, Mattel, Wizard of the Cost, HBO Asia dan Netflix',
            'visi_misi' => 'VISI :
            Menjadi studio concept art terbaik di industri entertainment di dunia
            Terbaik dalam aspek kualitas artwork yang mampu bersaing dengan desain kelas internasional dengan tetap menjaga kepuasan klien
            <br>
            MISI:
            </br>
            <p>1. Fokus menghasilkan concept art di bidang film</p>
            <p>2. Tetap mengembangkan servis di bidang ilustrasi, game dan media turunannya</p>
            <p>3. Membantu meningkatkan kualitas hidup karyawan</p>
            <p>4. Memberikan peningkatan fasilitas studio</p>
            <p>5. Bekerja sama dengan pihak-pihak lain untuk investasi ke dalam studio</p>
            
            ',
            'website_resmi' => 'https://caravanstudio.com/'
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'AstraIzuzu',
            'logo_path' => 'img/perusahaan/astraizuzu.gif',
            'nama_perusahaan' => 'PT Astra International',
            'deskripsi_singkat' => 'PT. Astra International Tbk. – Isuzu Sales Operation atau biasa disebut Astra Isuzu merupakan jaringan jasa

            penjualan, perawatan, dan perbaikan serta penyediaan suku cadang
            
            produk Isuzu, yang berdiri pada tahun 1990.',
            'visi_misi' => '',
            'website_resmi' => ''
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'WarnaWarniMedia',
            'logo_path' => 'img/perusahaan/warnawarni.png',
            'nama_perusahaan' => 'PT Warna Warni Media',
            'deskripsi_singkat' => '',
            'visi_misi' => '',
            'website_resmi' => ''
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'wismilak',
            'logo_path' => 'img/perusahaan/wismilak.jpeg',
            'nama_perusahaan' => 'PT Wismilak Inti Makmur Tbk',
            'deskripsi_singkat' => '',
            'visi_misi' => '',
            'website_resmi' => ''
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'bca',
            'logo_path' => 'img/perusahaan/bca.png',
            'nama_perusahaan' => 'PT Bank Central Asia, Tbk',
            'deskripsi_singkat' => '',
            'visi_misi' => '',
            'website_resmi' => ''
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'HotelCiputraWorld',
            'logo_path' => 'img/perusahaan/hotelcw.png',
            'nama_perusahaan' => 'Hotel Ciputra World',
            'deskripsi_singkat' => '',
            'visi_misi' => '',
            'website_resmi' => ''
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'platinum',
            'logo_path' => 'img/perusahaan/platinum.png',
            'nama_perusahaan' => 'PT Platinum Ceramics Industry',
            'deskripsi_singkat' => '',
            'visi_misi' => '',
            'website_resmi' => ''
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'ucmakassar',
            'logo_path' => 'img/perusahaan/ucmakassar.png',
            'nama_perusahaan' => 'UC Makassar',
            'deskripsi_singkat' => '',
            'visi_misi' => '',
            'website_resmi' => ''
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'wings',
            'logo_path' => 'img/perusahaan/wings.png',
            'nama_perusahaan' => 'PT Wings Surya',
            'deskripsi_singkat' => '',
            'visi_misi' => '',
            'website_resmi' => ''
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'marketingofficeciputra',
            'logo_path' => 'img/perusahaan/marketingciputra.png',
            'nama_perusahaan' => 'Marketing Office Ciputra',
            'deskripsi_singkat' => '',
            'visi_misi' => '',
            'website_resmi' => ''
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'tancorp',
            'logo_path' => 'img/perusahaan/tancorp.png',
            'nama_perusahaan' => 'PT Tancorp Abadi Nusantara',
            'deskripsi_singkat' => '',
            'visi_misi' => '',
            'website_resmi' => ''
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'mceasy',
            'logo_path' => '',
            'nama_perusahaan' => 'Mc Easy',
            'deskripsi_singkat' => '',
            'visi_misi' => '',
            'website_resmi' => ''
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'siantartop',
            'logo_path' => 'img/perusahaan/siantartop.jpeg',
            'nama_perusahaan' => 'PT Siantar Top, Tbk',
            'deskripsi_singkat' => '',
            'visi_misi' => '',
            'website_resmi' => ''
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'vitapharm',
            'logo_path' => 'img/perusahaan/vitapharm.jpeg',
            'nama_perusahaan' => 'PT Vitapharm',
            'deskripsi_singkat' => '',
            'visi_misi' => '',
            'website_resmi' => ''
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'ucsurabaya',
            'logo_path' => 'img/perusahaan/ucsurabaya.png',
            'nama_perusahaan' => 'UC Surabaya',
            'deskripsi_singkat' => '',
            'visi_misi' => '',
            'website_resmi' => ''
        ]);
    }
}
