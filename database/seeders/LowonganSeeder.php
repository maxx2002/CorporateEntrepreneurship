<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LowonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'blesscon',
            'nama_lowongan' => 'Admin Marketing',
            'jurusan_dibutuhkan' => 'S1 segala jurusan (diutamakan S1 Manajemen)',
            'bentuk_pekerjaan' => 'Full-time',
            'requirement' => '- Wanita, maks. 30 tahun<br />- Bertanggung jawab, disiplin, jujur, teliti, komunikatif<br />- Pengalaman di bidang Admin merupakan nilai tambah<br />- Fleksibel dalam hal waktu<br />- Penempatan di Surabaya (Head Office)',
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'indomaret',
            'nama_lowongan' => 'Mobile Apps Developer',
            'jurusan_dibutuhkan' => "Bachelor's Degree in Information Technology, Informatics Engineering, Computer Science, or any related field. Intern are welcome.",
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '- Developing mobile apps (IOS or Android ) to support Indomaret Group&rsquo;s business<br />operation<br />- Design, Develop, Implement Mobile Apps System<br />- Write code, perform testing, debugging and code review<br />- Rapidly fix bugs and solve problems<br />- Continuously discover, evaluate, and implement new technologies to maximize<br />development efficiency',
            'requirement' => '- Required skill(s) : ReactNative / ReactJS / NodeJS / Java / Javascript / JSON / XML /<br />Android Studio<br />- Have experience in Flutter / Kotlin / Xcode / Swift / develop iOS is a plus<br />- Strong knowledge of Android SDK, different versions of Android<br />- Familiar with RESTful APIs to connect to back-end services',
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'blesscon',
            'nama_lowongan' => 'Management Trainee Maintenance/ Produksi/ QA',
            'jurusan_dibutuhkan' => "Maintenance (Teknik Mesin/ Elektro) , Produksi (Semua Teknik),QA (Teknik Kimia/Bioteknologi/Teknik lainnya)",
            'bentuk_pekerjaan' => 'Full-time',
            'requirement' => '- Pria, maks 25 tahun<br />- IPK min 3.00<br />- Mampu bekerja dibawah tekanan<br />- Bersedia bekerja dalam shift (apabila diperlukan)<br />- Memiliki Jiwa Leadership<br />- Penempatan di Plant Sragen (disediakan mess)',
        ]);
    }
}
