<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beasiswa')->insert([
            'perusahaan_id' => 'indomaret',
            'nama_beasiswa' => 'Quipper Scholarship Award 2022',
            'jurusan_dibutuhkan' => 'Teknik Elektro',
            'requirement' =>  '- Pria, maks 25 tahun<br />- IPK min 3.00<br />- Mampu bekerja dibawah tekanan<br />- Bersedia bekerja dalam shift (apabila diperlukan)<br />- Memiliki Jiwa Leadership<br />- Penempatan di Plant Sragen (disediakan mess)',
        ]);
        DB::table('beasiswa')->insert([
            'perusahaan_id' => 'blesscon',
            'nama_beasiswa' => 'OSC MEDCOM',
            'jurusan_dibutuhkan' => 'Teknik Informatika',
            'requirement' =>  '- Pria, maks 25 tahun<br />- IPK min 3.00<br />- Mampu bekerja dibawah tekanan<br />- Bersedia bekerja dalam shift (apabila diperlukan)<br />- Memiliki Jiwa Leadership<br />- Penempatan di Plant Sragen (disediakan mess)',
        ]);
        DB::table('beasiswa')->insert([
            'perusahaan_id' => 'vooya',
            'nama_beasiswa' => 'Djarum Academy',
            'jurusan_dibutuhkan' => 'Teknik Pertanian',
            'requirement' =>  '- Pria, maks 25 tahun<br />- IPK min 3.00<br />- Mampu bekerja dibawah tekanan<br />- Bersedia bekerja dalam shift (apabila diperlukan)<br />- Memiliki Jiwa Leadership<br />- Penempatan di Plant Sragen (disediakan mess)',
        ]);
    }
}
