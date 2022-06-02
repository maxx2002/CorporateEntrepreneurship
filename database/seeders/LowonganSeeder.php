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
            'perusahaan_id' => 'CaravanStudio',
            'nama_lowongan' => 'Digital 2D Artist',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- producing high quality artwork for movie and game
            <br>- follow the team's art direction and open to constructive feedback.<br>
            - Willing to consistently learn and apply the latest industry trends in artwork</p>",
            'requirement' => '<p>- Skilled in the fundamentals of illustration<br />- Good knowledge and skills in Adobe Photoshop<br />- 3d skills is a plus (blender, etc)<br />- Good communication skills<br />- Able to work with tight deadlines and pressures Comfortable with working in a team<br />- Willing to consistently learn and apply the latest industry trends in artwork</p>',
            'daerah_penempatan' => 'Jakarta Barat',
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'CaravanStudio',
            'nama_lowongan' => 'Digital 3D artist',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Producing high quality character modeling or environment concept artwork using 3D assets<br />- follow the team's art direction and open to constructive feedback.<br />- Willing to consistently learn and apply the latest industry trends in artwork</p>",
            'requirement' => '- Skills & Knowledge
            - Good communication skills
            - Able to work with tight deadlines and pressures
            - Comfortable with working in a team',
            'daerah_penempatan' => 'Jakarta Barat',
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'AstraIzuzu',
            'nama_lowongan' => 'Sales Executive',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'MENJUAL MOBIL MERK ISUZU',
            'requirement' => '<p>- PRIA
            <br>- USIA MAKS. 28 TH
            <br>- PENDIDIKAN MIN.D3
            <br>- MEMILIKI SIM
            <br>- SDH VAKSIN 3 KALI</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'AstraIzuzu',
            'nama_lowongan' => 'Sales Executive',
            'bentuk_pekerjaan' => 'Internship',
            'job_desk' => 'MENJUAL MOBIL MERK ISUZU',
            'requirement' => '<p>- PRIA
            <br>- USIA MAKS. 28 TH
            <br>- PENDIDIKAN MIN.D3
            <br>- MEMILIKI SIM
            <br>- SDH VAKSIN 3 KALI</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'WarnaWarniMedia',
            'nama_lowongan' => 'Sekretaris Direksi',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>Membantu kelancaran pelaksanaan tugas pimpinan dalam melaksanakan&nbsp;kegiatan operasional perusahaan, yaitu:</p>
            <p>- Melaksanakan administratif, surat menyurat dan pengarsipan<br />- Melaksanakan persiapan bahan kerja<br />- Melaksanakan pengaturan jadwal agenda kegiatan pimpinan<br />- Melaksanakan notulensi dalam kegiatan rapat berkala pimpinan</p>',
            'requirement' => '<p>- Usia maksimal 35 tahun<br />- Pendidikan minimal D3 semua jurusan<br />- Pengalaman kerja minimal 2 tahun dibidang sekretaris<br />- Berpenampilan sopan, rapi, inisiatif tinggi dan komunikatif<br />- Mampu bekerja secara multitasking, memiliki time &amp; task management yang baik<br />- Mampu bekerja dengan target dan deadline<br />- Pekerja keras dan tahan terhadap tekanan<br />- Memiliki disiplin dan etika yang tinggi</p>',
            'daerah_penempatan' => 'Kota Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'WarnaWarniMedia',
            'nama_lowongan' => 'Accounting Staff',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Membuat dan menginput jurnal<br />- Membuat laporan keuangan<br />- Mengawasi transaksi keuangan<br />- Membuat rekonsiiliasi data keuangan<br />- Monitoring data keuangan perusahaan</p>',
            'requirement' => '<p>- Usia Maksimal 35 tahun<br />- Pendidikan minimal D3 Akuntansi<br />- IPK minimal 3.00<br />- Pengalaman kerja 2 tahun<br />- Bisa membuat laporan keuangan<br />- Memiliki keahlian di bidang Microsoft Ofiice</p>',
            'daerah_penempatan' => 'Kota Surabaya dan Palu'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'WarnaWarniMedia',
            'nama_lowongan' => 'Finance Collection
            ',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Menyimpan kas kecil<br />- Menyiapkan Tanda Terima (Receipt) atas pembayaran dari pemilik unit / penyewa.<br />- Menyiapkan reimbursement kas kecil.<br />- Membuat list deposit.<br />- Membuat Faktur Pajak Sederhana<br />- Pekerjaan lainnya yang ditugaskan secara khusus oleh perusahaan</p>',
            'requirement' => '<p>- Usia maksimal 35 Tahun<br />- Pendidikan minimal S1 Akuntansi<br />- Disiplin, tanggung jawab, jujur, inisiatif, komunikatif<br />- Detail Oriented</p>',
            'daerah_penempatan' => 'Palu, Sulawesi Tengah'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'WarnaWarniMedia',
            'nama_lowongan' => 'Administrasi
            ',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>Melakukan pekerjaan administrasi: input data, filling dokumen, berkoordinasi dengan devisi terkait, dan lain-lain.</p>',
            'requirement' => '<p>- Usia maksimal 35 tahun<br />- Pendidikan S1 Segala jurusan<br />- Pengalaman minimal 2 tahun dibidangnya<br />- Menguasai Microsoft Office<br />- Terbiasa bekerja dengan deadline dan sistematis dalam pelaporan<br />- Teliti, Cekatan dan Komunikatif</p>',
            'daerah_penempatan' => 'Kota Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'WarnaWarniMedia',
            'nama_lowongan' => 'Front End Web Programmer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Membuat aplikasi sesuai dengan kebutuhan perusahaan, termasuk existing aplikasi<br />- Mewujudkan desain web menjadi system yang berfungsi dengan baik</p>',
            'requirement' => '<p>- Pendidikan minimal D3/S1 Teknik Informatika / Komputer minimal IPK 3.00<br />- Pengalaman minimal 2 - 3 tahun dibidang front end<br />- Menguasai angular, java script, html, css, bootstrap<br />- Usia dibawah 50<br />- Prefer yang bisa .net core dan mvc framework<br />- Menguasai object oriented programing<br />- Bisa bekerja dalam team, komunikatif, inovatif dan memiliki inisiatif</p>',
            'daerah_penempatan' => 'Kota Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wismilak',
            'nama_lowongan' => 'Program Pendidikan Sales Marketing Supervisor (PPSMS)',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'PPSMS merupakan akselerasi program yang mempersiapkan kandidat untuk menjadi leader dalam Divisi Sales & Field Marketing (SFM). Durasi program PPSMS adalah 6 bulan, selama durasi tersebut peserta PPSMS akan melakukan acting untuk beberapa posisi yang ada di divisi SFM.',
            'requirement' => '<p>- Pendidikan min S1 semua jurusan, Manajemen Bisnis lebih diutamakan<br />- Min. IPK 3.3 dan berasal dari reputable university&nbsp;<br />- Mempunyai pengalaman leadership<br />- Terbuka untuk Fresh Graduate, maksimal memiliki pengalaman kerja 1 tahun&nbsp;&nbsp;<br />- Bersedia ditempatkan di seluruh wilayah Indonesia</p>',
            'daerah_penempatan' => 'Nasional'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wismilak',
            'nama_lowongan' => 'Marketing Graduate Challenger Program (MGCP)*',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'MGCP merupakan akselerasi program yang mempersiapkan kandidat untuk menjadi leader dalam divisi Marketing. Durasi program MGCP adalah 2 tahun, selama durasi tersebut peserta akan bertanggung jawab terhadap salah satu brand Wismilak. ',
            'requirement' => '<p>- Pendidikan min S1 semua jurusan (Manajemen Bisnis dan Teknik diutamakan)&nbsp;<br />- Min. IPK 3.2 (jurusan teknik) dan Min. IPK 3.4 (jurusan non teknik) yang berasal dari reputable university<br />- Mempunyai pengalaman sebgai leader dalam organisasi<br />- Bersedia melakukan traveling ke seluruh wilayah Indonesia&nbsp;<br />- Bersedia ditempatkan di Surabaya</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wismilak',
            'nama_lowongan' => 'System Analyst & Programmer
            ',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'Menangani project aplikasi development dan pemrogrmaan web',
            'requirement' => '<p>- Minimal S1 Teknik Informatika dengan IPK min. 3.0<br />- Mempunyai pengalaman di bidang iOS dan Android Development<br />- Bisa CI dan mobile Aplikasi (Flutter)<br />- Memahami terkait pemrograman Visual Studio, Flutter, PHP, Javascript<br />- Memahami terkait database MariaDB dan MySQL<br />- Memahami terkait web service JSON, REST, SOAP, API dsb<br />- Berpengalaman menangani project aplikasi development</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wismilak',
            'nama_lowongan' => 'PPIC Supervisor',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'Bertugas menjaga ketersediaan Finished Goods & Material untuk memenuhi kebutuhan order',
            'requirement' => '<p>- Pendidikan min. S1 Teknik Industri<br />- Memiliki pengalaman yang relevan akan lebih diutamakan<br />- Memahami Inventory Management, Production Scheduling, Ms Excel, ERP Software (SAP)</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wismilak',
            'nama_lowongan' => 'Senior Electrician',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'Melakukan perawatan dan trouble shooting mesin',
            'requirement' => '<p>- Pendidikan min. D3 jurusan Elektronik<br />- Berpengalaman dalam menghandle PLC mesin filter / rokok<br />- Mampu melakukan perawatan dan trouble shooting mesin<br />- Memahami system pemrograman PLC mesin rokok &amp; filter</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wismilak',
            'nama_lowongan' => 'Project Plan & Estimator',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'Membuat desain dan anggaran biaya suatu pekerjaan sipil dan mengatur jadwal pekerjaan',
            'requirement' => '<p>- Pendidikan min. S1 Teknik Sipil<br />- Menguasai AUTOCAD, SAP STRUKTUR, MS PROJECT<br />- Memiliki pengalaman min. 2 tahun di bidang kerja yang sama</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wismilak',
            'nama_lowongan' => 'Marketing Event Officer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'Terbentuknya brand awareness, brand image, dan brand loyality melalui program event guna mendukung pencapaian objective brand dan AE nasional',
            'requirement' => '<p>- Pendidikan min. D3 Komunikasi, Ekonomi, Bahasa<br />- Bertugas untuk membentuk brand awareness, brand image, dan brand loyality melalui program event guna mendukung pencapaian objective brand dan AE nasional<br />- Terbuka untuk fresh graduate<br />- Memiliki pengalaman di dalam pengerjaan event, aktif dalam kegiatan berorganisasi, public relation, menjadi nilai tambah<br />- Memiliki Communication Skill, Interpersonal MS Office Skill, Project Management Skill, dan Presentation Skill</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wismilak',
            'nama_lowongan' => 'Accounting Staff',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'Bertanggungjawab terhadap jurnal aktifitas piutang seluruh kantor cabang distribusi.',
            'requirement' => '<p>- Pendidikan min. S1 Jurusan Akuntansi/ Manajemen Keuangan<br />- Terbuka untuk Fresh Graduate<br />- Mahir mengoperasikan Ms. office<br />- Bersedia ditempatkan di Surabaya</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wismilak',
            'nama_lowongan' => 'Public Relation Intern',
            'bentuk_pekerjaan' => 'Internship',
            'job_desk' => 'Membantu departemen dalam branding perusahaan',
            'requirement' => '<p>- Min. mahasiswa semester 7 atau akhir<br />- Memiliki kemampuan public speaking dan copy writing&nbsp;<br />- Dapat mengoperasikan microsoft office dengan baik&nbsp;<br />- Mampu mengoperasikan software editing akan menjadi nilai tambah<br />- Bersedia untuk melakukan magang selama 6 bulan dan WFO</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wismilak',
            'nama_lowongan' => 'OD Intern',
            'bentuk_pekerjaan' => 'Internship',
            'job_desk' => 'Pemetaan Kompetensi (Knowledge, Skill, Awareness, Attitude & Soft Skill) & Metode Pengukuran untuk jabatan-jabatan di Departemen Engineering',
            'requirement' => '<p>- Memahami konsep kompetensi (Knowledge, Skill, Awareness, Attitude, Soft Skill)<br />- Memahami beragam metode pengukuran kompetensi<br />- Mampu menyusun modul pembelajaran<br />- Mau turun lapangan di Manufacturing<br />- Menunjukkan inisiatif dalam bekerja<br />- Bersedia untuk melakukan magang selama 6 bulan dan WFO</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'bca',
            'nama_lowongan' => 'Relationship Officer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>BCA turut berperan penting dalam kemajuan perekonomian negara dengan memberikan dukungan finansial bagi masyarakat khususnya nasabah. Untuk mewujudkan kepercayaan penuh nasabah, BCA senantiasa memberikan dukungan finansial bagi nasabah melalui solusi-solusi perbankan yang sesuai dengan kebutuhan mereka. Untuk itu lah Relationship Officer BCA berperan untuk memastikan nasabah mendapatkan solusi keuangan yang sesuai dengan kebutuhan para nasabah termasuk melakukan analisa kelayakan kredit bagi calon debitur.</p>
            <p>BCA mempersiapkan program pelatihan yang intensif selama 1 tahun agar para Relationship Officer dapat menjalankan perannya dengan optimal. Lulusan Program Relationship Officer akan di angkat langsung menjadi karyawan tetap di kantor cabang BCA. Selama pelatihan, peserta akan mendapatkan uang saku, jaminan kesehatan, tunjangan hari raya, tunjangan akhir tahun dan tentunya pelatihan yang berkualitas dari BCA.</p>',
            'requirement' => '<p>- Pendidikan minimal S1 dari semua jurusan<br />- Indeks Prestasi Kumulatif (IPK) minimal 2.75 dari skala 4.00<br />- Usia maksimal 24 tahun<br />- Memiliki minat terhadap kewirausahaan dalam dunia kerja<br />- Memiliki kemampuan analisa yang baik<br />- Memiliki kemampuan interpersonal yang baik<br />- Memiliki kemampuan negosiasi yang baik<br />- Mampu bekerja dibawah tekanan<br />- Memiliki keinginan berprestasi<br />- Belum menikah dan bersedia untuk tidak menikah selama pendidikan<br />- Bersedia menjalani ikatan dinas setelah pendidikan</p>',
            'daerah_penempatan' => ''
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'bca',
            'nama_lowongan' => 'Management Development Program (MDP)',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>BCA menantang para lulusan baru yang berkualitas untuk bergabung dalam Management Development Program (MDP).</p>
            <p>Selama 1,5 tahun masa pendidikan, Anda akan mendapatkan pengetahuan yang mendalam mengenai perbankan (operasional, pemasaran, analisa, dll). Pembelajaran yang terbaik serta para mentor pilihan akan mendampingi serta mempersiapkan Anda selama pendidikan untuk menjadi profesional yang unggul.</p>',
            'requirement' => '<p>- Minimal pendidikan S1<br />- IPK minimal 3.00 (S1) / 3.25 (S2)<br />- Usia maksimal 25 tahun (S1) / 27 tahun (S2)&nbsp;<br />- Terbuka untuk lulusan baru<br />- Senang belajar dan menyukai tantangan<br />- Memiliki jiwa kepemimpinan, serta memiliki interpersonal dan komunikasi yang baik&nbsp;<br />- Tertantang untuk ditempatkan di berbagai area di Indonesia, sesuai kebutuhan perusahaan</p>',
            'daerah_penempatan' => ''
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'bca',
            'nama_lowongan' => 'Wealth Management Program (WMP)',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>Kesadaran nasabah yang semakin tinggi akan pentingnya investasi keuangan menjadi peluang bagi BCA untuk memperkuat bisnisnya. Untuk itu BCA membutuhkan professional muda berpengalaman yang memiliki ketertarikan tinggi terhadap dunia investasi keuangan (terutama produk ekuitas dan pendapatan tetap) untuk bergabung di Wealth Management Program yang pendidikannya akan berlangsung selama 1 tahun.&nbsp;</p>
            <p>Wealth Management Program akan bertugas sebagai product specialist yang akan bertugas dikantor&nbsp;cabang BCA agar lebih optimal dalam menawarkan solusi investasi keuangan kepada nasabah. Tidak hanya mendampingi, diharapkan lulusan program dapat melakukan edukasi investasi dikantor cabang BCA dan dapat mendukung pencapaian target cabang dari produk investasi.&nbsp;</p>
            <p>Segera daftarkan diri Anda dan jadilah ahli di bidang investasi keuangan bersama BCA!</p>',
            'requirement' => '<p>- Lulusan S1, IPK 3.00, Usia 24 tahun<br />- Lulusan S2, IPK 3.25, Usia 26 tahun<br />- Memiliki ketertarikan dan passion terhadap investasi/ wealth management<br />- Mampu berbahasa inggris secara lisan dan tulisan<br />- Memiliki analytical thinking dan problem solving yang baik<br />- Memiliki kemampuan intrapersonal dan interpersonal yang baik<br />- Belum dan bersedia tidak menikah selama masa pendidikan 1 tahun<br />- Bersedia menjalani ikatan dinas selama 2 tahun</p>',
            'daerah_penempatan' => ''
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'bca',
            'nama_lowongan' => 'BCA IT Trainee (BIT)',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>Perkembangan teknologi yang kian pesat merupakan salah satu tantangan yang harus dihadapi oleh semua perusahaan di Indonesia, termasuk BCA. Menjawab tantangan ini, BCA terus mengedepankan inovasi agar dapat senantiasa menjadi bank yang dapat diandalkan oleh masyarakat. Inovasi yang dilakukan BCA selama ini membutuhkan dukungan dari semua pihak terutama bagian IT.</p>
            <p>Untuk mempersiapkan tenaga profesional di bidang IT, BCA secara spesifik merancang sebuah program bagi lulusan Ilmu Komputer yang disebut sebagai BCA IT Trainee. Peserta BCA IT Trainee.akan mengikuti pelatihan selama 6 (enam) bulan di BCA. Lulusan program ini akan diangkat langsung menjadi karyawan tetap dan ditempatkan di Divisi IT BCA. Selama pelatihan, peserta akan mendapatkan uang saku, jaminan kesehatan, tunjangan hari raya, tunjangan akhir tahun dan tentunya pelatihan yang berkualitas dari BCA.</p>',
            'requirement' => '<p>- Lulusan S1 dengan IPK minimal 3,00 (Strata 1) dan 3,25 (Strata 2)<br />- Memiliki latar belakang pendidikan atau pekerjaan di bidang komputer<br />- Usia maks. 25 tahun (Strata 1) dan 27 tahun (Strata 2)<br />- Bersedia tidak menikah selama 1 (satu) tahun pendidikan<br />- Bersedia menjalani ikatan dinas setelah pendidikan<br />- Penempatan di Kantor Pusat (Jakarta)</p>',
            'daerah_penempatan' => ''
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'HotelCiputraWorld',
            'nama_lowongan' => 'Sales Excecutive',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '',
            'requirement' => '<p>- Two (2) years experience in the same position from international chain hotel<br />- Strong interpersonal and communication skills<br />- English is a must (Written and Spoken)<br />- Love to work in a team target oriented<br />- Prior experience with Power Pro Hotel System</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'HotelCiputraWorld',
            'nama_lowongan' => 'F&B Supervisor',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '',
            'requirement' => '<p>- Two (2) years experience in the same position from international chain hotel<br />- Achieved Basic Food Hygiene Certificate&nbsp;<br />- Strong interpersonal and communication skills<br />- English is a must (Written and Spoken)<br />- Love to work in a team target oriented<br />- Prior experience with Power Pro Hotel System</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'HotelCiputraWorld',
            'nama_lowongan' => 'Chef De Partie',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '',
            'requirement' => '<p>- Two (2) years experience in the same position from international chain hotel<br />- Achieved Basic Food Hygiene Certificate&nbsp;<br />- Strong interpersonal and communication skills<br />- English is a must (Written and Spoken)<br />- Love to work in a team target oriented<br />- Prior experience with Power Pro Hotel System</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'HotelCiputraWorld',
            'nama_lowongan' => 'Commis – Western',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '',
            'requirement' => '<p>- Two (2) years experience in the same position from international chain hotel<br />- Achieved Basic Food Hygiene Certificate&nbsp;<br />- Strong interpersonal and communication skills<br />- English is a must (Written and Spoken)<br />- Love to work in a team target oriented<br />- Prior experience with Power Pro Hotel System</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'HotelCiputraWorld',
            'nama_lowongan' => 'Commis Pastry',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '',
            'requirement' => '<p>- Two (2) years experience in the same position from international chain hotel<br />- Achieved Basic Food Hygiene Certificate&nbsp;<br />- Strong interpersonal and communication skills<br />- English is a must (Written and Spoken)<br />- Love to work in a team target oriented<br />- Prior experience with Power Pro Hotel System</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'HotelCiputraWorld',
            'nama_lowongan' => 'Waiter',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '',
            'requirement' => '<p>- Two (2) years experience in the same position from international chain hotel<br />- Achieved Basic Food Hygiene Certificate&nbsp;<br />- Strong interpersonal and communication skills<br />- English is a must (Written and Spoken)<br />- Love to work in a team target oriented<br />- Prior experience with Power Pro Hotel System</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'platinum',
            'nama_lowongan' => 'Sales Management Trainee',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'Bertanggungjawab untuk mempelajari semua sistem & prosedur departemen sales serta membuat suatu project yg bisa meningkatkan target sales ',
            'requirement' => '<p>- Min S1 segala jurusan dengan IPK min 3,00
            <br />- Usia max 26 th</p>',
            'daerah_penempatan' => 'Seluruh cabang perusahaan (Surabaya, Jakarta, Bandung, Semarang, Jember, Bali, Medan)'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'platinum',
            'nama_lowongan' => 'Teknik Management Trainee',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'Bertanggungjawab untuk mempelajari semua sistem & prosedur yg ada di semua departemen pabrik serta membuat suatu project yg bisa memperbaiki proses yg sudah berjalan di pabrik',
            'requirement' => '<p>- Min S1 Teknik Mesin/ Kimia/ Elektro/ Industri dengan IPK min 3,00
            <br />- Usia max 26 th</p>',
            'daerah_penempatan' => 'Seluruh cabang Pabrik (Surabaya, Gresik, Sidoarjo, Bekasi)'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'platinum',
            'nama_lowongan' => 'Finance/  Accounting/ Tax Supervisor',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'Bertanggungjawab untuk mempelajari semua sistem & prosedur departemen finance/ akuntansi/ tax serta membuat laporan bulanan yg diperlukan',
            'requirement' => '<p>- Min S1 Akuntansi dengan IPK min 3,00
            <br />- Usia max 30 th
            <br />- Pengalaman sbg staf finance/ accounting/ tax min 3 th
            <br />- Diutamakan yg telah memiliki brevet pajak</p>',
            'daerah_penempatan' => 'Di Surabaya, Jember, Semarang'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'platinum',
            'nama_lowongan' => 'Legal Specialist',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'Bertanggungjawab untuk membantu departemen lain dalam mereview kontrak yg ada baik dengan customer, supllier maupun yg terkait ketenagakerjaan',
            'requirement' => '<p>- Min S1 Hukum dengan IPK min 3,00
            <br />- Usia max 30 th
            <br />- Pengalaman sbg legal corporate min 2 th</p>',
            'daerah_penempatan' => 'Di Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'platinum',
            'nama_lowongan' => 'Promo & Event Specialist',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'Bertanggungjawab untuk membuat ide promo & mempersiapkan segala keperluan event suatu perusahaan ',
            'requirement' => '<p>- Min S1, diutamakan dari jurusan Komunikasi
            <br />- Terbiasa handle persiapan promo/ event &amp; pengalaman sbg MC event suatu perusahaan min 2 th</p>',
            'daerah_penempatan' => 'Di Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'ucmakassar',
            'nama_lowongan' => 'Dosen PSDKU VCD',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Merencanakan &amp; melaksanakan proses pembelajaran serta menilai dan mengevaluasi hasil pembelajaran secara objektif<br />- Melaksanakan penelitian, dan pengabdian kepada masyarakat yang sesuai dengan bidang keilmuannya dan roadmap penelitian / pengabdian kepada masyarakat yang disepakati program studi<br />- Mengembangkan kualifikasi akademik dan kompetensi secara berkelanjutan, sejalan dengan perkembangan ilmu pengetahuan, teknologi dan seni<br />- Mendukung dan menjalankan tugas penunjang lainnya</p>',
            'requirement' => '<p>- Pendidikan Strata 2 atau sedang studi lanjut doktoral jurusan desain<br />- Memiliki Jabatan Akademik (JAKA) dosen akan lebih disukai<br />- Memiliki jiwa &lsquo;suka mencetak prestasi dan siap bekerja keras meraihnya&rdquo;<br />- Memiliki pengalaman dan sertifikat profesi akan lebih diutamakan<br />- Memiliki pengalaman bekerja di institusi/industri yang terkait dengan prodi akan lebih disukai</p>',
            'daerah_penempatan' => 'Makassar'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'ucmakassar',
            'nama_lowongan' => 'Dosen PSDKU IMT',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Merencanakan &amp; melaksanakan proses pembelajaran serta menilai dan mengevaluasi hasil pembelajaran secara objektif<br />- Melaksanakan penelitian, dan pengabdian kepada masyarakat yang sesuai dengan bidang keilmuannya dan roadmap penelitian / pengabdian kepada masyarakat yang disepakati program studi<br />- Mengembangkan kualifikasi akademik dan kompetensi secara berkelanjutan, sejalan dengan perkembangan ilmu pengetahuan, teknologi dan seni<br />- Mendukung dan menjalankan tugas penunjang lainnya</p>',
            'requirement' => '<p>- Telah menyelesaikan pendidikan Strata 2 atau sedang studi lanjut doktoral jurusan informatika<br />- Memiliki Jabatan Akademik (JAKA) dosen akan lebih disukai<br />- Memiliki jiwa &lsquo;suka mencetak prestasi dan siap bekerja keras meraihnya&rdquo;<br />- Memiliki pengalaman dan sertifikat profesi akan lebih diutamakan<br />- Memiliki pengalaman bekerja di institusi/industri terkait dengan prodi akan lebih disukai</p>',
            'daerah_penempatan' => 'Makassar'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'ucmakassar',
            'nama_lowongan' => 'Student Counsellor',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'Bertanggung jawab melakukan promosi, menjalin hubungan kerjasama dan memberikan informasi kepada pihak sekolah maupun publik (siswa SMA, orang tua) mengenai Kampus UC Makassar, terutama pendaftaran agar mencapai target intake mahasiswa yang telah ditetapkan dengan mengacu pada anggaran yang telah disetujui dan ditetapkan.',
            'requirement' => '<p>- Laki-laki/perempuan, 21 &ndash; 27 tahun<br />- Pendidikan minimal Strata 1 (semua jurusan)<br />- Memiliki pengalaman di bidang terkait akan lebih diutamakan<br />- Memiliki interpersonal skill yang bagus, supel dan cepat beradaptasi<br />- Inisiatif, kreatif dan berpikir out of the box<br />- Memiliki kemampuan komunikasi verbal dan tulisan yang bagus<br />- Mempunyai integritas yang tinggi</p>',
            'daerah_penempatan' => 'Makassar'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'ucmakassar',
            'nama_lowongan' => 'Purchasing Officer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'Bertanggung jawab dalam administrasi dan pengadaan dan/atau pembelian kebutuhan-kebutuhan setiap departemen, seperti barang, lisensi program, furniture, dan sebagainya dengan melakukan seleksi vendor dalam melakukan transaksi.',
            'requirement' => '<p>- Laki-laki<br />- Pendidikan minimal strata 1 (terbuka untuk semua jurusan)<br />- Pengalaman minimal 1 tahun bekerja di bidang Purchasing<br />- Berpengalaman dalam administrasi dan proses seleksi vendor<br />- Menguasai Microsoft Office (excel, word, power point, dan visio) dan google workspace<br />- Up to date terhadap teknologi digital</p>',
            'daerah_penempatan' => 'Makassar'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wings',
            'nama_lowongan' => 'SPV PRODUKSI',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'D3/S1 T.Elektro / T.Mesin / T. Industri',
            'requirement' => '<p>- IPK Min 3.00
            <br />- Laki-Laki / Perempuan
            <br />- Usia Maks. 35th</p>',
            'daerah_penempatan' => 'Gresik / Pasuruan'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wings',
            'nama_lowongan' => 'SPV ENGINEERING ( PLC )',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'D3/ S1 T. Elektro / T.Mesin',
            'requirement' => '<p>- IPK Min 3.00
            <br />- Laki-Laki / Perempuan
            <br />- Usia Maks. 35th</p>',
            'daerah_penempatan' => 'Pasuruan / Gresik'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wings',
            'nama_lowongan' => 'STAF DESAIN PACKAGING',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'S1 Desain Grafis / DKV',
            'requirement' => '<p>- IPK Min 3.00
            <br />- Laki-Laki / Perempuan
            <br />- Usia Maks. 35th</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wings',
            'nama_lowongan' => 'QUALITY CONTROL / QUALITY ASSURANCE ',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'D3/S1 T. Pangan/ T. Kimia / T. Industri Pertanian / Kimia',
            'requirement' => '<p>- IPK Min 3.00
            <br />- Laki-Laki / Perempuan
            <br />- Usia Maks. 35th</p>',
            'daerah_penempatan' => 'Gresik / Pasuruan'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wings',
            'nama_lowongan' => 'STAF IT',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'D3/S1 T.Informatika / Sistem informasi',
            'requirement' => '<p>- IPK Min 3.00
            <br />- Laki-Laki / Perempuan
            <br />- Usia Maks. 35th</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wings',
            'nama_lowongan' => 'STAF SCM',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'S1 T.Industri / T.Informatika',
            'requirement' => '<p>- IPK Min 3.00
            <br />- Laki-Laki / Perempuan
            <br />- Usia Maks. 35th</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wings',
            'nama_lowongan' => 'MARKET RESEARCH',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'S1 Manajemen / T. Industri / Ilmu Komunikasi',
            'requirement' => '<p>- IPK Min 3.00
            <br />- Laki-Laki / Perempuan
            <br />- Usia Maks. 35th</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wings',
            'nama_lowongan' => 'STAF PURCHASING',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'S1 Manajemen / T.Industri',
            'requirement' => '<p>- IPK Min 3.00
            <br />- Laki-Laki / Perempuan
            <br />- Usia Maks. 35th</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wings',
            'nama_lowongan' => 'STAF HRD - TRAINING',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'S1 Psikologi / MSDM / Ilmu Komunikasi',
            'requirement' => '<p>- IPK Min 3.00
            <br />- Laki-Laki / Perempuan
            <br />- Usia Maks. 35th</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wings',
            'nama_lowongan' => 'STAF LOGISTIK',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'D3/S1 Semua Jurusan',
            'requirement' => '<p>- IPK Min 3.00
            <br />- Laki-Laki / Perempuan
            <br />- Usia Maks. 35th</p>',
            'daerah_penempatan' => 'Gresik'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wings',
            'nama_lowongan' => 'SPV REFINERY & FRACTIONATION',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'S1 T. Industri / T. Mesin / T. Kimia',
            'requirement' => '<p>- IPK Min 3.00
            <br />- Laki-Laki / Perempuan
            <br />- Usia Maks. 35th</p>',
            'daerah_penempatan' => 'Gresik'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wings',
            'nama_lowongan' => 'STAF DOCUMENT CONTROL',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'S1 T. Industri',
            'requirement' => '<p>- IPK Min 3.00
            <br />- Laki-Laki / Perempuan
            <br />- Usia Maks. 35th</p>',
            'daerah_penempatan' => 'Gresik'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wings',
            'nama_lowongan' => 'BUILDING ENGINEERING',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'S1 T.Sipil',
            'requirement' => '<p>- IPK Min 3.00
            <br />- Laki-Laki / Perempuan
            <br />- Usia Maks. 35th</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'wings',
            'nama_lowongan' => 'SPV SALES',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => 'D3/S1 Manajemen / Komunikasi / Accounting',
            'requirement' => '<p>- IPK Min 3.00
            <br />- Laki-Laki / Perempuan
            <br />- Usia Maks. 35th</p>',
            'daerah_penempatan' => 'Seluruh Indonesia Bag. Timur'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'marketingofficeciputra',
            'nama_lowongan' => 'ICT Support',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Melakukan instalasi dan konfigurasi perangkat komputer baru, CCTV, telepon<br />- Melakukan perbaikan/pemeliharaan komputer sesuai permintaan user<br />- Melakukan pengaturan dan konfigurasi printer serta bekerjasama dengan vendor<br />- Melakukan perbaikan untuk perangkat keras yang mengalami gangguan<br />- Menguasai dan melaksanakan standar perangkat keras+lunak komputer user berdasarkan pengembangan kebutuhan usaha<br />- Bertanggung jawab untuk mengontrol dan memelihara fungsi operasional perangkat komputer user sesuai rencana dan ketentuan yang sudah ditetapkan<br />- Membuat analisa dan laporan administrasi IT<br />- Melakukan inventaris audit baik perangkat keras IT maupun perangkat lunak/lisensi<br />- Melakukan dokumentasi terhadap sistem IT yang berjalan<br />- Bertanggung jawab melakukan pemeliharan, perbaikan dan pengembangan website berdasarkan pengembangan kebutuhan usaha</p>',
            'requirement' => '<p>- Minimal S1 Teknik Informatika/Elektro Teknik Komputer<br />- Menguasai OS Windows, Linux<br />- Mempunyai kemampuan analisa<br />- Bisa bekerjasama dalam tim<br />- Komunikatif<br />- Bertanggung jawab, jujur dan loyal<br />- Mengerti bahasa pemrograman webbased serta database pendukungnya</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'marketingofficeciputra',
            'nama_lowongan' => 'Marketing Executive Partnership',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Memberikan dengan detail informasi produk dan program-program menarik yang telah ditetapkan untuk menarik calon customer.<br />- Memberikan informasi yang dibutuhkan dalam proses pengajuan KPR dan membantu customer dalam prosesnya jika dibutuhkan.<br />- Menjaga hubungan baik dengan customer.<br />- Melakukan pameran di lokasi yang ditetapkan.<br />- Mencapai target penjualan yang telah ditetapkan oleh manager.<br />- Melaksanakan program digital marketing yang diterapkan di proyek.<br />- Memberitahukan kepada customer dokumen-dokumen yang diperlukan dalam pembelian properti.<br />- Menyiapkan dokumen yang diberikan oleh customer untuk dilanjutkan ke dalam proses pembayaran.<br />- Menyediakan laporan mingguan kepada manager.</p>',
            'requirement' => '<p>- Usia maksimal 28 tahun sehat jasmani dan rohani<br />- Pendidikan S1 semua disiplin ilmu, IPK minimal 3<br />- Mempunyai pengalaman sebagai sales property minimal 1 tahun (lebih disukai)<br />- Fresh graduate are welcome to apply<br />- Komunikatif, bisa presentasi<br />- Customer Oriented<br />- Sanggup bekerja dengan target<br />- Menguasai Microsoft Office</p>',
            'daerah_penempatan' => 'Surabaya, Gresik, Sidoarjo, Pasuruan, Makassar, Semarang, Yogyakarta'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'marketingofficeciputra',
            'nama_lowongan' => 'Promotion Officer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Plan, develop and deliver promotional campaigns.<br />- Evaluate the effectiveness of all marketing activity.<br />- In charge for preparing, planning and project managing the publication of all publicity material to maximize promotion.<br />- Make a creative impact by crafting of the integrated marketing and communication campaigns of the brand.<br />- Prepare monthly report to evaluate the effectiveness of the sales campaign.</p>',
            'requirement' => '<p>- Has graduated from a reputable university in Visual Communication Design or Graphic Design with minimum GPA of 3.00<br />- Strong ability in Adobe Photoshop, Corel, Illustrator and video editing.<br />- Proficient in English, both written and spoken<br />- Able to work closely with others in a positive and collaborative environment<br />- Willing to adapt through challenges for growth.<br />- Has a strong conceptual thinking skills<br />- Great interpersonal skills to build strong bonds among colleagues<br />- Willing to make impact and influence for the success of the company</p>',
            'daerah_penempatan' => 'Surabaya, Gresik'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'marketingofficeciputra',
            'nama_lowongan' => 'Digital Marketing',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Working closely with web developer team to improve SEO Rating, page rank, and website optimization<br />- Analyzing and create a report for website audit in every projects (On-Page &amp; OFF-Page SEO)<br />- Giving solution or suggestion about to improve SEO for website / social medias<br />- Analyzing and create a report for social medias audit in every projects<br />- Keyword search for property / real estate industry across Indonesia<br />- Helping projects to optimize Ads with campaign strategy, audience targeting, competitor analysis, GDN or Display Networks<br />- Create marketing strategy with SEO and analyzing competitor's SEO strategy<br />- Create a SEO training / Content Writing / Ads Strategy for Marketing team in projects<br />- Help managing Customer Relationship Management programs<br />- Managing and running email marketing software<br />- Creating and running Pay Per Click (PPC) Campaign if needed</p>",
            'requirement' => '<p>- Bachelor from any major with minimum GPA of 3.00<br />- Age of 23 - 30 years old<br />- Preferably having at least 1 years of experience in digital marketing<br />- Exceptional understanding about ON Page SEO &amp; OFF Page SEO&nbsp;<br />- Understand about SEO Optimization practices, with Google Analytics, Google Trend, Keyword Planner, Ads Studio, Search Console, Page Speed Analysis, and FB Ads Manager, etc<br />- Understand about mail marketing software (Mailchimp, Campaign monitor, etc), - Customer Relationship Management (Salesforce, Hubspot, Freshdesk, etc), WordPress&nbsp;<br />- Have passion to learn more about Digital Marketing, SEO, SEM.<br />- Open to constructive criticism<br />- Excellent copywriting skills<br />- Excellent communication skills<br />- Creative and Product minded<br />- Able to work with a team or individually</p>',
            'daerah_penempatan' => 'Surabaya, Gresik, Jakarta'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'tancorp',
            'nama_lowongan' => 'Investor Relation Staff',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Organize documents and ensure their quality and accuracy<br />- Responsible for Avian's branding to investors</p>",
            'requirement' => '<p>- Minimum bachelor degree in any major<br />- Minimum GPA 3.00<br />- Fresh graduate or Max 1 year of work experience<br />- Maximum Age 25 Years Old<br />- Proven leadership and management experiences in Campus or Student Organization<br />- Fluent in English</p>',
            'daerah_penempatan' => 'AVIAN - Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'tancorp',
            'nama_lowongan' => 'Strategic Management Officer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Responsible for developing strategic plans based on the vision and mission of the company<br />- Identify and analyze all departments' strategic needs and KPIs<br />- Periodically review KPI reports and prepare KPI monthly meeting needs<br />- Calculate and recapitulate KPI scores of all departments annually to enhance performance based on the set parameter and the company's vision and mission</p>",
            'requirement' => '<p>- Minimal pendidikan S1 International Business Management dan Manajemen Bisnis&nbsp;<br />- Memiliki pengalaman kerja minimal 1 tahun di bidang yang sama.<br />- Memiliki kemampuan interpersonal dan komunikasi yang baik.<br />- Mampu menggunakan program Adobe Photoshop,<br />- Visio, Excel dan Power Point.<br />- Mampu berfikir secara analitis, detail dan teliti.</p>',
            'daerah_penempatan' => 'AVIAN - Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'tancorp',
            'nama_lowongan' => 'Beauty & Health Consultant',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Selling and promoting products<br />- Expanding sales coverage area and customer database<br />- Provide product knowledge presentations to customers<br />- Provide after-sales service for customers</p>",
            'requirement' => "<p>- Bachelor's degree in any major<br />- Sales/marketing experiences, preferably in high-end products, supplements, property, cosmetics, and others<br />- Target-oriented, proactive, persuasive, proficient in interpersonal relationships<br />- Easy to get along with and well-connected<br />- Neat and attractive, able to speak foreign languages such as English and Mandarin is a plus<br />- Have an A/C driver's license</p>",
            'daerah_penempatan' => 'PT Herbal Equiva Internasional - Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'tancorp',
            'nama_lowongan' => 'Marketing & Sales Development',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "Fast track career development for fresh graduates, who will developed in Marketing and Sales division as Sales Promotion, Special Outlet, Modern Outlet, Product or Brand Development",
            'requirement' => "<p>- Minimum bachelor degree in any major<br />- Minimum GPA 3.00<br />- Fresh graduate or Max 1 year of work experience<br />- Maximum Age 25 Years Old<br />- Proven leadership and management experiences in Campus or Student Organization<br />- Attractive, passionate at Marketing and Sales<br />- Problem solver, agile, and have a growth mindset<br />- Effective teammate with strong communication.<br />- Have driving license (A/C)</p>",
            'daerah_penempatan' => 'Tanobel - Willing to be placed all around Indonesia'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'tancorp',
            'nama_lowongan' => 'Management Trainee Brand',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "Fast track career development for fresh graduates, who will developed in Marketing and Sales division as Sales Promotion, Special Outlet, Modern Outlet, Product or Brand Development",
            'requirement' => "<p>- S1 Business Management/Marketing/Communication<br />- Fresh graduate<br />- Usia Max 24th<br />- Passionate in Marketing, Sales &amp; Promotion</p>",
            'daerah_penempatan' => 'Tanobel - Willing to be placed all around Indonesia'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'tancorp',
            'nama_lowongan' => 'Area Sales Promotion SPV',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "Manage team to create promotion program or event for all channels (SPO, MO, GT) to increase values.",
            'requirement' => "<p>- Minimum bachelor&rsquo;s degree all major<br />- Have minimum 2 years experience in the same position at FMCG Company<br />- Having an experence at promotion, event and brand activation<br />- Fluent in english is a plus<br />- Having a driving license A/C<br />- Have an intregrity and agile<br />- Willing to official travel out of town</p>",
            'daerah_penempatan' => 'Tanobel - Willing to be placed at East Java and West Java'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'tancorp',
            'nama_lowongan' => 'Digital Marketing Staff',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Analyze digital data to draw key recommendations around social media optimization<br />- Conduct social media audits to ensure best practices are being used<br />- Maintain digital dashboard of several different accounts<br />- Ensure that the brand message is consistent</p>",
            'requirement' => "<p>- Bachelor Degree at Communication, Multimedia, Marketing education degree background is preferable<br />- A social media savvy with 1 year experience in digital marketing (fresh graduate is also welcome)<br />- Excellent verbal communication and writing skills in English and Bahasa - Good knowledge in utilizing and optimize Facebook Ad, Instagram Ad and algorithm<br />- Hands-on experience with managing social media engagement &amp; interactions<br />- Knowledge of digital marketing trend<br />- Strong in conveying branding and identity through aesthetics &ndash; layout, color and caption<br />- Keen attention to detail<br />- Good organizational and time management skills</p>",
            'daerah_penempatan' => 'Tanobel - Willing to be placed at Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'tancorp',
            'nama_lowongan' => 'FAT Internship',
            'bentuk_pekerjaan' => 'Internship',
            'job_desk' => "<p>- Involve in the Bank's credit application for Business Units&nbsp;&nbsp;<br />- Participate in the financial statement consolidation application project for the company<br />- Create SPT, PPh, and PPN billing codes and reports<br />- Completing the tax equalization process</p>",
            'requirement' => "<p>- Final semester students<br />- Major in Accounting/Financial Management<br />- Minimum GPA 3.5<br />- Proficient in Ms. Excel<br />- Ability to operate Visio or draw.io is preferred</p>",
            'daerah_penempatan' => 'PT Tancorp Abadi Nusantara - Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'tancorp',
            'nama_lowongan' => 'Digital Marketing Internship',
            'bentuk_pekerjaan' => 'Internship',
            'job_desk' => "<p>- Create content marketing for social media platforms (IG, FB, YT, tiktok)
            <br />- Conduct detailed analysis of social engagement performance and make actionable recommendations
            <br />- Build relationship and manage project with influencers or partnership</p>",
            'requirement' => "<p>- Last year student or fresh graduate are welcome to apply
            <br />- Excellent written and verbal communication skills
            <br />- Willing to learn, initiative, good communication skills
            <br />- Internship period : min 3 - 6 months</p>",
            'daerah_penempatan' => 'PT CMN Internasional Indonesia - Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'tancorp',
            'nama_lowongan' => 'Digital Marketing Internship',
            'bentuk_pekerjaan' => 'Internship',
            'job_desk' => "<p>- Create content marketing for social media platforms (IG, FB, YT, tiktok)
            <br />- Conduct detailed analysis of social engagement performance and make actionable recommendations
            <br />- Build relationship and manage project with influencers or partnership</p>",
            'requirement' => "<p>- Last year student or fresh graduate are welcome to apply
            <br />- Excellent written and verbal communication skills
            <br />- Willing to learn, initiative, good communication skills
            <br />- Internship period : min 3 - 6 months</p>",
            'daerah_penempatan' => 'PT Herbal Equiva Internasional - Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'tancorp',
            'nama_lowongan' => 'HR Intern',
            'bentuk_pekerjaan' => 'Internship',
            'job_desk' => "<p>- Responsible for administrative data completeness of new employee<br />- Manage candidates' database<br />- Designing and copywriting for content on the job portal</p>",
            'requirement' => "<p>- Final year student or fresh graduate majoring in Business Management/Psychology<br />- Minimum GPA 3.5<br />- Neat, detail, agile, and tenacious<br />- Likes administrative work<br />- Able to design using Canva/Adb. Photoshop</p>",
            'daerah_penempatan' => 'PT Tancorp Abadi Nusantara - Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'mceasy',
            'nama_lowongan' => 'Web Programmer/ Software Developer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Manage a team of high performing Software Engineer
            <br />- Give constructive and thoughtful feedback, nurturing, and create an inclusive environment where everyone can grow and do their best work
            <br />- Instill a Growth mindset, meritocracy, integrity, sense of ownership, and hunger for knowledge into your team
            <br />- Working hands-on with your team and our product team through design and implementation
            <br />- Championing engineering fundamentals and work across the organization to continuously improve our engineering process
            <br />- Be a leader, not a manager</p>",
            'requirement' => "<p>- Strong knowledge in PHP and Python
            <br />- Strong knowledge of SQL (familiarity with cloud SQL and DynamoDB is a bonus)
            <br />- Exposure to Git and conflict handling
            <br />- Strong understanding of OOP
            <br />- Strong experience in API</p>",
            'daerah_penempatan' => 'Surabaya (on-site)'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'mceasy',
            'nama_lowongan' => 'DevOps Engineer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "Maintain our Cloud Infrastructure and CI/CD process in AWS.",
            'requirement' => "<p>- Knowledge in CI/CD (eg: Jenkins, Docker) is a must
            <br />- Knowledge in AWS is a must (AWS Certified Solutions Architect certification / course completion is highly desirable)
            <br />- Strong knowledge in AWS Cognito, AppSync, Amplify, and DynamoDB
            <br />- Very strong knowledge of SQL and database structure
            <br />- Familiar and have experience with Clean Code Principles
            <br />- Strong understanding in Git and conflict handling
            <br />- Strong understanding of OOP</p>",
            'daerah_penempatan' => 'Surabaya (on-site)'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'mceasy',
            'nama_lowongan' => 'Content Specialist',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Monitoring market trends and supporting the Marketing Manager to make a marketing plan and integrated communication activities.
            <br />- Research, develop, create and deploy content for digital campaigns and content marketing strategies, especially for website and social media related content.
            <br />- Understand the current trend, uprising KOL and trending topic in social media.
            <br />- Building relationships with media, KOL, and agency and implementing any PR and initiatives related to the brand.</p>",
            'requirement' => "<p>- Bachelor's degree in Communication, Public relations, or Marketing with exposure to short video product users.
            <br />- Excellent language skills in Bahasa Indonesia and English.
            <br />- Have broad knowledge and experience in content, social media marketing, handling content management tools and analytics.
            <br />- Possess strong learning ability, team management skills and cross-department communication.
            <br />- Able to work under minimal supervision and have strong logic/ common sense related to job nature.
            <br />- Familiar with office software such as Excel, Word, etc. With data processing experience and other data analysis capabilities are preferred.</p>",
            'daerah_penempatan' => 'Jakarta (on-site)'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'mceasy',
            'nama_lowongan' => 'Videographer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Bertanggung jawab untuk membuat konten dan bercerita melalui video
            <br />- Bekerja sama dengan tim branding &amp; content specialist untuk mengembangkan , merencanakan pengambilan gambar, mengedit dan mendistribusikan video melalui Youtube, TikTok, Instagram LinkedIn, dan lainnya.
            <br />- Memastikan video sudah memenuhi standar yang ditentukan sebelum dipublikasikan
            <br />- Mahir menggunakan tools editing video seperti Final Cut Pro X, Adobe Premiere dan Adobe After Effects</p>",
            'requirement' => "<p>- Usia Maksimal 30 Tahun
            <br />- Pendidikan Minimal S1 , Jurusan Ilmu Komunikasi, Desain, atau sejenisnya
            <br />- Memiliki Pengalaman sebagai Videografer selama 2 Tahun
            <br />- Mampu menganalisa situasi dengan baik
            <br />- Komunikatif dan senang belajar hal-hal baru</p>",
            'daerah_penempatan' => 'Surabaya (on-site)'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'mceasy',
            'nama_lowongan' => 'Graphic Designer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Merancang Desain grafis untuk seluruh kebutuhan campaign perusahaan
            <br />- Mendistribusikan content campaign marketing perusahaan ke media sosial
            <br />- Bertanggung jawab terhadap kebutuhan desain materi/ Seminar/ Event Perusahaan
            <br />- Bekerjasama dengan pihak agency dan memberi informasi/ brief berkaitan dengan gaya desain, format, dan timeline yang sudah ditentukan</p>",
            'requirement' => "<p>- Maksimal 35 Tahun
            <br />- Pendidikan Minimal S1
            <br />- Berpengalaman selama 2 tahun di bidangnya
            <br />- Memiliki kemampuan me-manage media sosial dengan baik
            <br />- Menguasai dengan baik tools Desain Grafis untuk kegiatan campaign digital Perusahaan
            <br />- Memiliki kreatifitas dalam menuangkan ide-ide dari segi Design dan Digital
            <br />- Berpengalaman dalam merancang atau mengoptimalkan landing pages</p>",
            'daerah_penempatan' => 'Surabaya (on-site)'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'siantartop',
            'nama_lowongan' => 'Marketing Export Executive',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Menerima dan mengkoordinasikan PO buyer export<br />- Berkoordinasi mengenai NPD<br />- Menghitung HPP seluruh produk<br />- Membuat dan presentasi sales bulanan<br />- Monitoring order buyer hingga terkirim</p>",
            'requirement' => "<p>- Wanita<br />- Usia 23 &ndash; 27 Tahun<br />- D3 / S1 Manajemen Pemasaran, Bisnis Internasional, Administrasi Bisnis<br />- Memiliki pengalaman diposisi yang sama minimal 1 tahun<br />- Fresh Graduates are welcome<br />- Memahami konsep pemasaran &amp; Analisa peluang pasar<br />- Memiliki daya analisa yang baik, proaktif, komunikatif</p>",
            'daerah_penempatan' => 'Surabaya, Jawa Timur'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'siantartop',
            'nama_lowongan' => 'Staff Desain',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "Melakukan kegiatan desain packaging / media sosial",
            'requirement' => "<p>- Pria / Wanita<br />- Usia 23 &ndash; 28 tahun<br />- Pendidikan minimal D3 / S1 Desain Komunikasi Visual, Desain Produk, Desain Grafis<br />- Memiliki pengalaman di bidang yang sama minimal 1 tahun (Berpengalaman membuat desain packaging / desain media sosial<br />- Menguasai software Adobe Ilustrator, PSD, Corel Draw<br />- Disiplin dan proaktif</p>",
            'daerah_penempatan' => 'Surabaya, Jawa Timur'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'siantartop',
            'nama_lowongan' => 'Creative Supervisor',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "Membuat storyboard / konsep iklan untuk ditayangkan di TV Nasional",
            'requirement' => "<p>- Pria, usia 27 - 35 tahun<br />- D3/S1 Ilmu Komunikasi, Broadcasting, Televisi dan Film - Pengalaman minimal 3 tahun sebagai tim kreatif menjadi nilai plus<br />- Mampu membuat storyboard/konsep iklan serta memahami color grading<br />- Mampu mengoperasikan software editing (Adobe Premiere, Davinci, dll)<br />- Mampu mengoperasikan kamera<br />- Kreatif, Komunikatif &amp; Proaktif<br />- Portofolio hasil karya storyboard dan hasil video yang pernah dibuat (dibawa saat interview)</p>",
            'daerah_penempatan' => 'Surabaya, Jawa Timur'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'siantartop',
            'nama_lowongan' => 'Staff IT',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Melakukan perbaikan dan pemeliharaan PC, komputer dan network<br />- Membuat program atau aplikasi yang dibutuhkan perusahaan</p>",
            'requirement' => "<p>- Pria / Wanita, usia maksimal 27 tahun<br />- D3 / S1 Teknik Informatika, Sistem Informasi<br />- Freshgraduate are welcome<br />- Memahami pemrograman HTML, JavaScript, PHP, MySQL, Codeigniter<br />- Pernah membuat program / aplikasi dengan bahasa pemrograman diatas (menjadi nilai plus)<br />- Memiliki pengalaman dalam pemeliharaan dan perbaikan komputer, PC dan network<br />- Memiliki kemampuan analisa, teliti, kritis, dan problem solving</p>",
            'daerah_penempatan' => 'Sidoarjo, Jawa Timur'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'siantartop',
            'nama_lowongan' => 'Personal Assistant',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "Melakukan manajemen database dan dokumen yang dibutuhkan perusahaan, seperti ISO",
            'requirement' => "<p>- Wanita<br />- Usia maksimal 35 Tahun<br />- Memiliki pengalaman kerja minimal 2 tahun dibidang yang sama (pengalaman di bidang manufaktur lebih diutamakan)<br />- Memahami mengenai ISO<br />- Memiliki kemampuan manajemen database dan dokumen dengan baik<br />- Menguasai Microsoft Office (Word, Excel dan PPT)<br />- Memiliki kemampuan Bahasa Inggris aktif maupun pasif</p>",
            'daerah_penempatan' => 'Sidoarjo, Jawa Timur'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'vitapharm',
            'nama_lowongan' => 'Brand Manager',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Mengembangkan strategi branding untuk memastikan pertumbuhan bisnis<br />- Mengusulkan dan memantau strategi pemasaran yang terintegrasi untuk tiap brand<br />- Memantau tren pasar sebagai dasar penentuan strategi promosi&nbsp;<br />- Mengelola data pergerakan kompetitor dan konsumen<br />- Mengelola anggaran program branding</p>",
            'requirement' => "<p>- Laki-laki/ Perempuan<br />- Pendidikan S1 Manajemen, lebih disukai S2 Manajemen<br />- Pengalaman minimal 5 tahun di posisi yang sama<br />- Penempatan di Surabaya</p>",
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'vitapharm',
            'nama_lowongan' => 'Accounting Manager',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Mengelola data/ informasi keuangan untuk perhitungan biaya dan menyusun laporan keuangan perusahaan&nbsp;<br />- Mengkoordinir penyusunan anggaran perusahaan serta mengontrol realisasinya<br />- Memastikan pelaporan dan pemenuhan kewajiban perpajakan sesuai peraturan<br />- Memastikan proses dan transaksi keuangan perusahaan berjalan sesuai sistem<br />- Melakukan analisa keuangan dan analisa terkait lain untuk menentukan strategi pemasaran</p>",
            'requirement' => "<p>- Laki-laki/ Perempuan<br />- Usia maksimal 35 tahun<br />- Pendidikan minimal S1 Akuntansi, lebih disukai S2 Akuntansi&nbsp;<br />- Memiliki Brevet A &amp; B<br />- Pengalaman minimal 5 tahun di posisi yang sama<br />- Penempatan di Surabaya</p>",
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'vitapharm',
            'nama_lowongan' => 'Staf IT',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Merancang sistem informasi dan pembuatan program<br />- Memantau dan menjaga kelancaran sistem serta jaringan<br />- Mengenali dan menyelesaikan persoalan yang berkaitan dengan komputer (hardware&amp;software)</p>",
            'requirement' => "<p>- Laki-laki/ Perempuan<br />- Usia maksimal 28 tahun<br />- Belum menikah<br />- Pendidikan S1 Teknik Informatika/ Sistem Informasi<br />- IPK minimal 3.00<br />- Lebih disukai yang menguasai pemrograman berbasis web<br />- Penempatan di Surabaya</p>",
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'vitapharm',
            'nama_lowongan' => 'Staf Akuntansi',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "Melakukan kegiatan pembukuan perusahaan",
            'requirement' => "<p>- Laki-laki/ Perempuan<br />- Usia maksimal 28 tahun<br />- Belum menikah<br />- Pendidikan S1 Akuntansi&nbsp;<br />- IPK minimal 3.00<br />- Penempatan di Surabaya</p>",
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'vitapharm',
            'nama_lowongan' => 'Staf Produksi',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "Menjaga dan memelihara kelancaran kerja mesin/ peralatan serta sarana produksi lainnya",
            'requirement' => "<p>- Laki-laki<br />- Usia maksimal 28 tahun<br />- Belum menikah<br />- Pendidikan S1 Teknik Mesin/ Teknik Elektro&nbsp;<br />- IPK minimal 3.00<br />- Bersedia bekerja shift<br />- Penempatan di Surabaya</p>",
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'vitapharm',
            'nama_lowongan' => 'Staf Layanan Promosi Digital',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Membuat desain materi promosi<br />- Melakukan kegiatan promosi melalui media sosial<br />- Mengelola media sosial perusahaan</p>",
            'requirement' => "<p>- Laki-laki/ Perempuan<br />- Usia maksimal 28 tahun<br />- Belum menikah<br />- Pendidikan S1 segala jurusan, lebih disukai dari jurusan DKV/ Multimedia<br />- IPK minimal 3.00<br />- Menguasai Adobe Photoshop/ Adobe Illustrator/ CorelDRAW<br />- Pengalaman mengelola media online<br />- Penempatan di Surabaya</p>",
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'vitapharm',
            'nama_lowongan' => 'Staf Laboratorium',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Melakukan kegiatan analisa terhadap kualitas produk<br />- Membuat laporan pemeriksaan harian</p>",
            'requirement' => "<p>- Laki-laki/ Perempuan<br />- Usia maksimal 28 tahun<br />- Belum menikah<br />- Pendidikan S1 Farmasi/ Teknik Kimia<br />- IPK minimal 3.00<br />- Penempatan di Surabaya</p>",
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'vitapharm',
            'nama_lowongan' => 'Supervisor Produksi',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Mengkoordinir penjadwalan dan pelaksanaan proses produksi<br />- Melakukan pengawasan terhadap kualitas hasil produksi</p>",
            'requirement' => "<p>- Laki-laki/ Perempuan<br />- Usia maksimal 35 tahun<br />- Pendidikan minimal S1 Farmasi/ Teknik Kimia<br />- Pengalaman minimal 5 tahun di posisi yang sama<br />- Bersedia bekerja shift<br />- Penempatan di Surabaya</p>",
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'vitapharm',
            'nama_lowongan' => 'Staf Gudang',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Mengelola penataan gudang<br />- Melaksanakan kegiatan administratif gudang</p>",
            'requirement' => "<p>- Laki-laki<br />- Usia maksimal 28 tahun<br />- Belum menikah<br />- Pendidikan S1 Teknik Mesin/ Teknik Elektro<br />- IPK minimal 3.00<br />- Penempatan di Surabaya</p>",
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'vitapharm',
            'nama_lowongan' => 'Supervisor Pembayaran & Data Karyawan',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Mengkoordinir dan melaksanakan perhitungan serta pembayaran balas jasa beserta kewajiban pajak sesuai ketentuan<br />- Mengkoordinir dan melaksanakan pengelolaan data karyawan<br />- Mengkoordinir tersedianya fasilitas untuk kesejahteraan karyawan</p>",
            'requirement' => "<p>- Laki-laki/ Perempuan<br />- Usia maksimal 35 tahun<br />- Pendidikan S1 Akuntansi&nbsp;<br />- Pengalaman minimal 5 tahun di posisi yang sama<br />- Penempatan di Surabaya</p>",
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'vitapharm',
            'nama_lowongan' => 'Beautician',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Menjadi presenter demo kecantikan perusahaan<br />- Melakukan perawatan kecantikan kepada konsumen</p>",
            'requirement' => "<p>- Perempuan<br />- Usia maksimal 25 tahun<br />- Belum menikah<br />- Pendidikan S1 Tata Rias<br />- IPK minimal 3.00<br />- Berpenampilan menarik, tinggi dan berat badan proporsional<br />- Bersedia bekerja di hari Sabtu &amp; Minggu (6 hari kerja, libur tidak pada hari Sabtu &amp; Minggu)<br />- Penempatan di Semarang/ Bekasi/ Surabaya</p>",
            'daerah_penempatan' => 'Surabaya/ Semarang/ Bekasi'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'ucsurabaya',
            'nama_lowongan' => 'Programmer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "Programmer Officer memiliki tugas untuk membuat dan melakukan maintenance aplikasi Ciputra Information System (CIS) bersama Departemen Business Process Owner dari seluruh departemen/program studi di Universitas Ciputra",
            'requirement' => "<p>- Pria/ Wanita, usia 20 &ndash; 40 tahun<br />- Pendidikan minimal S1 dari jurusan yang relevan<br />- Memiliki pengalaman optimasi dan penggunaan query dalam penggunaan data berukuran besar<br />- Memiliki pengalaman menggunakan SDLC dalam pembuatan aplikasi web menggunakan PHP dengan framework Codelgniter, HTML5, CSS3 dan Jquery<br />- Memiliki pengalaman membuat OOP di PHP<br />- Memiliki pengalaman dengan Tools Web Developer dalam browser terbaru (seperti Firebug) untuk melakukan debug di sisi klien<br />- Memiliki pengalaman membuat Mobile Apps Application (diutamakan menggunakan Flutter)<br />- Memiliki pengalaman menggunakan MySQL sebagai database engine dalam metode SDLC</p>",
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'ucsurabaya',
            'nama_lowongan' => 'ICT Infrastructure',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "ICT Infrastructure Officer memiliki tugas utama untuk melakukan pengelolaan infrastruktur jaringan dan server Universitas Ciputra",
            'requirement' => "<p>- Pria/ Wanita, usia 20 &ndash; 40 tahun<br />- Pendidikan minimal Strata 1 Teknik Komputer/ Teknik Informatika/ jurusan yang relevan<br />- Memiliki pengalaman sebagai IT Server Administrator (Linux/ Windows)<br />- Menguasai pengetahuan konsep network/ jaringan infrastruktur (switching, routing, VPN)<br />- Memiliki kemampuan leadership yang baik</p>",
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'ucsurabaya',
            'nama_lowongan' => 'Research & Community Development Officer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "Bertanggung jawab secara teknis untuk pelaksanaan dan evaluasi kegiatan penelitian dosen serta bertanggung jawab dalam perencanaan dan pengelolaan evaluasi kegiatan pengabdian masyarakat",
            'requirement' => "<p>- Wanita, usia 22 - 25 tahun<br />- Pendidikan minimal Strata 1 dari jurusan yang relevan<br />- Menguasai administrasi dan pengolahan data<br />- Menguasai MS Office, Google Suite, dan memahami dasar komputerisasi</p>",
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'ucsurabaya',
            'nama_lowongan' => 'Laboran Lab. Pengolahan Pangan',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "Laboran bertanggungjawab dalam melakukan penjadwalan pemakaian laboratorium, mempersiapkan sarana prasarana, peralatan dan perlengkapan yang dibutuhkan dan terlibat langsung dalam kegiatan yang dilakukan mahasiswa. Melakukan inventarisasi peralatan perlengkapan dan perawatan sarana prasarana laboratorium.",
            'requirement' => "<p>- Pria, usia 25 &ndash; 45 tahun<br />- Pendidikan Sarjana/ Diploma 4 jurusan Keteknikan Pertanian (TEP/ TP) atau Teknik Mesin<br />- Memiliki pengalaman minimal 2 tahun mengenai penggunaan, perawatan dan perbaikan mesin-mesin pengolahan pangan<br />- Diutamakan memiliki sertifikasi mengenai mengenai perawatan dan perbaikan mesin/peralatan pengolahan pangan</p>",
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'ucsurabaya',
            'nama_lowongan' => 'UC Center Officer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "",
            'requirement' => "<p>- Wanita/ pria, usia 22 - 28 tahun<br />- Pendidikan minimal S1 dari jurusan yang relevan&nbsp;<br />- Memiliki kemampuan administrasi dan keuangan, serta aktif di media social<br />- Memiliki ketelitian dan inisiatif yang tinggi<br />- Memiliki passion dalam menulis artikel, tanggap dengan issue yang ada di lingkungan masyarakat</p>",
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'ucsurabaya',
            'nama_lowongan' => 'Administration Officer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "Academic support bertanggungjawab dalam perencanaan dan persiapan perkuliahan dengan berkoordinasi dengan ketua program studi dan dosen pengampu Academic support juga bertanggungjawab dalam administrasi selama perkuliahan termasuk ujian yang berlangsung, tugas akhir, skripsi, tesis dan yudisium dan hal-hal yang berkaitan dengan layanan mahasiswa dan layanan program studi, seperti tata kelola dokumen dan sarana prasarana prodi.",
            'requirement' => "<p>- Wanita, usia 21 &ndash; 30 tahun<br />- Pendidikan minimal Strata 1 dari jurusan yang relevan<br />- Memiliki pengalaman di bidang yang relevan minimal 1 tahun (diutamakan berpengalaman di bidang Pendidikan)<br />- Menguasai MS Office, Google Suite, dan memahami dasar administrasi keuangan</p>",
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'c+c&co',
            'nama_lowongan' => 'Senior Designer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Creation and production of artworks or photography sessions<br />- Open-mindedness in learning new skills that contributes to the<br />betterment of the team<br />- Producing meticulous and creative outcomes for the assigned<br />projects</p>',
            'requirement' => '<p>- Minimum 3 &ndash; 5 year experience working in design agencies of<br />various disciplines ranging from digital imaging, illustrations,<br />branding, video and/or packaging<br />- Versatility in animation and moving image are preferred<br />- Degree qualifications in Design Communication / Motion Design<br />- Candidates with previous internships in any one of the<br />aforementioned fields are preferred<br />- Participate in managing and supervising timeline for the projects<br />- Estimating the time required to complete the work<br />- Open-mindedness in learning new skills that contributes to the<br />betterment of the team<br />- Work with the Senior members to develop learning programmes<br />- Producing meticulous and creative outcomes for the assigned<br />projects<br />- Familiarity with print and digital applications<br />- Critical thinking in design making<br />- Digital technology and innovations<br />- Understanding of the contemporary visual eye and focus on details<br />- Affinity for strategy, visual storytelling, visual design, and graphics<br />- Demonstrating illustrative skills with rough sketches and working on<br />layouts ready for print<br />- Knowledge and ability to work with a range of software such as<br />Adobe Photoshop, Illustrator, In-Design, XD, After Effects, Premiere<br />and other relevant/editing softwares<br />- Versatility in animation and moving image are preferred (After<br />Effects, Premiere Pro, Spark AR)<br />- Cloud computing software<br />- Synthesis and evaluation of user-centred design principles<br />- Creation and proposals for a simple and elegant design approach to<br />design problems<br />- Development of the art direction and production responsibilities<br />- Leading for Image-making responsibilities and production<br />- Proofreading to produce accurate and high-quality work<br />- Presenting finalised ideas and concepts to clients or account<br />managers<br />- Meeting clients or account managers to discuss the business<br />objectives and requirements of the job<br />- Working as part of a team with printers, copywriters, photographers,<br />stylists, illustrators, other designers, account executives, web<br />developers and marketing specialists<br />- Articulate, good communication skills both verbal-nonverbal in<br />Bahasa and English<br />- Travel as of where and when needed for the jobs</p>',
            'daerah_penempatan' => '<p>Surabaya, Indonesia</p>'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'komunal',
            'nama_lowongan' => 'Back End Developer (NodeJS)',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Design and implementation of low-latency, high-availability, and performant applications<br />- Work closely with the development and project management teams to accomplish the technical requirements.<br />- Identify, troubleshoot and resolve development issues<br />- Write clean and maintainable code that is properly tested and reviewed</p>',
            'requirement' => '<p>- A degree in computer engineering or computer science or related is preferred<br />- Having a minimum of 1-year experience writing back-end code using NodeJS<br />- Proficient understanding of code versioning tools, such as Git<br />- Strong understanding of MVC design patterns and microservice architectures<br />- Have a passion for working in a Startup and building an impactful application<br />- Can work individually or in a team in an Agile environment</p>',
            'daerah_penempatan' => '-'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'komunal',
            'nama_lowongan' => 'Application Support Engineer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Provide technical support for enterprise-level application systems.<br />- Respond to general questions and trouble tickets promptly.<br />- Research, diagnose, troubleshoot, and identify potential solutions for how to resolve an issue.<br />- Document actionable bugs for engineering resolution.</p>',
            'requirement' => '<p>- Bachelor&rsquo;s degree in computer engineering or computer science or related is preferred<br />- Having a minimum of 1 year of experience as IT Support/ Technical Support<br />- Good analytical, problem-solving skills and good attention to detail<br />- Proficient in programming language especially nodeJS and database concepts such as SQL Server and<br />MongoDB.</p>',
            'daerah_penempatan' => '-'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'komunal',
            'nama_lowongan' => 'QA Automation Tester',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => "<p>- Develop and execute automated test scripts<br />- Record problems and issues following the project's problem and issue management plans.<br />- Work with the application team to resolve any issues arising from the testing process.<br />- Participate in the release control process (when the application is transferred from the build team to the test<br />team) to ensure that solutions meet business requirements.<br />- Validate fixes.</p>",
            'requirement' => '<p>- Bachelor&rsquo;s degree in computer engineering or computer science is preferred<br />- Previous experience as IT Quality Assurance, Testing (User Acceptance Testing), and Automation<br />- Working knowledge of automation testing tools (Cypres is prefered)<br />- Proficient in at least one programming language and database management to be able to understand and communicate effectively with the developer team</p>',
            'daerah_penempatan' => '-'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'komunal',
            'nama_lowongan' => 'UI UX Designer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Works closely with UX leadership in utilizing industry standard design tools to create user interfaces, customer interactions, and interactive prototypes.<br />- Gather and evaluate user requirements in collaboration with product managers and engineers<br />- Assist in executing all UI / UX design stages from concept to final hand-off to engineering<br />- Develop UI mockups and prototypes that clearly illustrate how sites function and look like</p>',
            'requirement' => '<p>- Preferably a candidate who has a background in IT/Design and have an adequate understanding of UI/UX Design,<br />- Fresh Graduates from uni / bootcamp are welcome to apply,<br />- Have a good skill on illustration will be a plus<br />- Creative, good sense of design layout, design trends, and typography<br />- Having portfolios of previous UI UX design is a must</p>',
            'daerah_penempatan' => '-'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'komunal',
            'nama_lowongan' => 'Digital Marketing Specialist',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Design all digital marketing strategies and activities<br />- Execute the projects (promotions, activities, campaigns, etc)<br />- Measure, analyze, and report the performance/result of the projects, then consider how to improve<br />- Work hand-in-hand with the team member and the vendors to execute the projects more efficient</p>',
            'requirement' => '<p>- Good understanding of digital marketing metrics and tools<br />- 1+ years experience of working in the advertisement agency<br />- Knowledge of paid ads and its dashboard (Google Adwords &amp; Facebook Ads)<br />- In-depth understanding of SEM campaign strategies and SEO practices</p>',
            'daerah_penempatan' => '-'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'komunal',
            'nama_lowongan' => 'Marketing Communication Specialist',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Involve in ideation/creation of influencer campaign in acquiring &amp; maintaining KOL/influencers/BA<br />- Selecting, dealing, arranging a meeting, and reminding each account to execute the campaign<br />- Analyze &amp; Manage overall KOLs network performance<br />- Build influencers database<br />- To create engaging social media content<br />- Design for Communications, marketing tools, and promotion of products<br />- Maintain relationships with other relevant third parties and media</p>',
            'requirement' => "<p>- Bachelor's degree in communication-related major<br />- Interested in working as influencer management or KOL Management<br />- Ability to work under pressure and deadlines<br />- Must have a positive attitude, creative, proactive, and fast, learner<br />- Understanding P2P and rural banking (BPR) business is a must<br />- Advanced communication and interpersonal skills</p>",
            'daerah_penempatan' => '-'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'komunal',
            'nama_lowongan' => 'Developer Intern',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Design and implementation of low-latency, high-availability, and performant applications<br />- Work closely with the development and project management teams to accomplish the technical requirements.<br />- Write clean and maintainable code that is properly tested and reviewed</p>',
            'requirement' => '<p>- Last year student pursuing a degree in Information Engineering, Informations System, or related IT Major.<br />- Passionate about coding and programming, innovation, and solving challenging problems.<br />- Has good knowledge of Object-Oriented Programming<br />- Familiar with at least one server-side scripting language (preferably nodeJS)<br />- Able to do 6 months internship (full Monday-Friday)</p>',
            'daerah_penempatan' => '-'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'prudential',
            'nama_lowongan' => 'Senior Associate Financial Consultant',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Melakukan aktivitas penjualan produk<br />- Melakukan aktifitas perekrutan dan monitoring calon Financial Consultant</p>',
            'requirement' => '<p>- Pendidikan terakhir min. D3/S1<br />- Usia 25-40 tahun<br />- Memiliki pengalaman bekerja min. 3 tahun dengan penghasilan min. Rp 9.000.000,- <br />- Diutamakan yang pernah berwirausaha, bekerja di sektor marketing, perbankan dan Human Resources </p>',
            'daerah_penempatan' => 'Jakarta, Medan, Bandung, Bali, Surabaya, Batam'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'prudential',
            'nama_lowongan' => 'Associate Financial Consultant',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Mengikuti program pelatihan selama 12 bulan yang dilakukan secara online dan juga on-site di Surabaya<br />- Melakukan aktivitas penjualan produk<br />- Melakukan aktivitas perekrutan dan monitoring calon Financial Consultant</p>',
            'requirement' =>'<p>- Pendidikan terakhir min. D3/S1<br />- Usia 25-40 tahun<br />- Memiliki pengalaman bekerja min. 3 tahun  dengan penghasilan min. Rp 5.000.000,- <br />-Diutamakan yang pernah berwirausaha, bekerja di sektor marketing, perbankan dan Human Resources </p>',
            'daerah_penempatan' => 'Jakarta, Medan, Bandung, Bali, Surabaya, Batam'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'prudential',
            'nama_lowongan' => 'Financial Consultant',
            'bentuk_pekerjaan' => 'Part-time',
            'job_desk' => '<p>- Melakukan aktivitas penjualan produk<br />- Melakukan aktivitas perekrutan dan monitoring calon <br />- Mengikuti pelatihan</p>',
            'requirement' =>'<p>- Pendidikan terakhir min. SMA atau sederajat<br />-Maks. Usia 55 tahun</p>',
            'daerah_penempatan' => 'Dapat bekerja secara mobile'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'prudential',
            'nama_lowongan' => 'Semua Divisi Tentative',
            'bentuk_pekerjaan' => 'Freelance',
            'job_desk' => '<p>- Tentative </p>',
            'requirement' =>'<p>- Usia min. 17 th.<br />-Usia maks. 60 th.</p>',
            'daerah_penempatan' => 'Seluruh Indonesia'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'prudential',
            'nama_lowongan' => 'Trainer/Pelatih',
            'bentuk_pekerjaan' => 'Internship',
            'job_desk' => '<p>- Melakukan aktivitas mengajar para Financial Consultant seputar product knowledge, pengembangan karakter dan pengembangan tim </p>',
            'requirement' =>'<p>-Diutamakan yang memiliki pendidikan atau ahli dalam bidang marketing, public speaking, communication atau sejenisnya<br />-Diutamakan yang berdomisili di Surabaya</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'prudential',
            'nama_lowongan' => 'Financial Consultant',
            'bentuk_pekerjaan' => 'Internship',
            'job_desk' => '<p>- Melakukan aktifitas penjualan produk<br />- Melakukan aktifitas perekrutan dan monitoring calon Financial Consultant </p>',
            'requirement' =>'<p>- Sehat secara jasmani dan rohani </p>',
            'daerah_penempatan' => 'Dapat bekerja secara mobile'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'prudential',
            'nama_lowongan' => 'Administrative Staff',
            'bentuk_pekerjaan' => 'Internship',
            'job_desk' => '<p>- Melakukan aktifitas administratif perusahaan </p>',
            'requirement' =>'<p>- Diutamakan yang memiliki pendidikan manajemen, ekonomi dan sejenisnya<br />- Diutamakan yang berdomisili di Surabaya </p>',
            'daerah_penempatan' => 'Surabaya'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'prudential',
            'nama_lowongan' => 'Tentative',
            'bentuk_pekerjaan' => 'Scholarship',
            'job_desk' => '<p>- Tentative </p>',
            'requirement' =>'<p>- Telah bekerja selama min. 2 tahun </p>',
            'daerah_penempatan' => 'Seluruh Indonesia'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'orangtua',
            'nama_lowongan' => 'Accounting Staff',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Melakukan cocokan omset dan monitoring piutang<br />- Melakukan cocokan gaji<br />- Melakukan penginputan voucher<br />- Rekonsiliasi bank dan cocokan aset<br />- Melakukan cocokan piutang dan penginputan invoice</p>',
            'requirement' => '<p>- Minimal S1 Akuntansi (IPK min. 3.00)<br />- Usia 22 &ndash; 25 tahun<br />- Terbuka untuk Fresh Graduates<br />- Teliti, Cekatan &amp; Tekun <br />- Bersedia ditempatkan di Jakarta Barat</p>',
            'daerah_penempatan' => 'Jakarta Barat'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'orangtua',
            'nama_lowongan' => 'Logistic Accounting Staff',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Mengecek kelengkapan dokumen dari ekspedisi<br />- Menginput tagihan yang diterima dari ekspedisi ke dalam sistem<br />- Membuat tagihan ke distributor</p>',
            'requirement' => '<p>- Minimal S1 Akuntansi (IPK min. 3.00)<br />- Usia 22 &ndash; 25 tahun<br />- Terbuka untuk Fresh Graduates<br />- Teliti, Cekatan &amp; Tekun <br />- Bersedia ditempatkan di Jakarta Barat</p>',
            'daerah_penempatan' => 'Jakarta Barat'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'orangtua',
            'nama_lowongan' => 'Costing Staff',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Melakukan stock opname<br />- Verifikasi dokumen pendukung data persediaan<br />- Melakukan proses costing (Inventory pabrik &amp; pengecekan biaya pabrik)<br />- Mengecek dan monitor pengalokasian biaya pabrik serta penentuan komponen COGM</p>',
            'requirement' => '<p>- Minimal S1 Akuntansi (IPK min. 3.00)<br />- Usia 22 &ndash; 25 tahun<br />- Terbuka untuk Fresh Graduates<br />- Teliti, Cekatan &amp; Tekun <br />- Bersedia ditempatkan di Jakarta Barat</p>',
            'daerah_penempatan' => 'Jakarta Barat'
        ]);


        DB::table('lowongan')->insert([
            'perusahaan_id' => 'orangtua',
            'nama_lowongan' => 'Account Receivable Staff',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Melakukan pencocokan omset<br />- Melakukan penagihan<br />- Membuat invoice<br />- Memproses tagihan</p>',
            'requirement' => '<p>- Minimal S1 Akuntansi (IPK min. 3.00)<br />- Usia 22 &ndash; 25 tahun<br />- Terbuka untuk Fresh Graduates<br />- Teliti, Cekatan &amp; Tekun <br />- Bersedia ditempatkan di Jakarta Barat</p>',
            'daerah_penempatan' => 'Jakarta Barat'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'orangtua',
            'nama_lowongan' => 'Internal Control Staff',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Mereview dan memastikan penerapan prosedur (SOP, IK, Form, dll)<br />- Melakukan sosialisasi seluruh prosedur<br />- Melakukan audit kepatuhan (compliance) terhadap prosedur yang berlaku dan melakukan review terhadap laporan audit kepatuhan (compliance)<br />- Melakukan pemeriksaan terhadap proses bisnis untuk meningkatkan kontrol dan meminimalisasi resiko yang ada<br />- Melakukan pengembangan sistem untuk meningkatkan efisiensi kerja</p>',
            'requirement' => '<p>- Minimal S1 Akuntansi (IPK min. 3.00)<br />- Usia 22 &ndash; 25 tahun<br />- Terbuka untuk Fresh Graduates<br />- Teliti, Cekatan &amp; Tekun <br />- Bersedia ditempatkan di Jakarta Barat</p>',
            'daerah_penempatan' => 'Jakarta Barat'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'orangtua',
            'nama_lowongan' => 'Analis QC',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Melakukan supervisi hasil pengecekan kualitas oleh QC Lapang<br />- Melakukan supervisi pengaturan kerja QC Lapang oleh Shift Leader<br />- Memastikan parameter produksi dilakukan sesuai prosedur yang berlaku<br />- Melakukan koordinasi dengan Section Manager QC terkait isu-isu kualitas</p>',
            'requirement' => '<p>- Minimal S1 Teknologi Pangan (IPK min. 3.00)<br />- Usia 22 &ndash; 27 tahun<br />- Terbuka untuk Fresh Graduates<br />- Teliti, Cekatan &amp; Tekun <br />- Bersedia ditempatkan di Caringin, Bogor</p>',
            'daerah_penempatan' => 'Caringin, Bogor'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'magnetsolusiintegra',
            'nama_lowongan' => 'Customer Engagement Associate',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Menyusun dan mengolah data base<br />- Melakukan market analisis<br />- Melakukan sales call dan visit sesuai dengan target market<br />- Melakukan presentasi produk jasa kepada klien.<br />- Menyiapkan dan mem-follow up penawaran.<br />- Melakukan Survei Client Satisfaction.<br />- Mengatasi komplain klien terkait jasa yang digunakan</p>',
            'requirement' => '<p>- Min. D3 semua jurusan, diutamakan background Manajemen Pemasaran<br />- Pengalaman min. 2 tahun di bidang Sales/Marketing Jasa<br />- Terbiasa melakukan presentasi baik offline maupun virtual<br />- Target oriented, relasi luas, terbiasa mobile<br />- Memahami sistem tender menjadi nilai tambah<br />- Terbiasa dengan Ms. Office, email, aplikasi video conference</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'magnetsolusiintegra',
            'nama_lowongan' => 'Digital Marketing',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>Melakukan aktivitas pemasaran jasa konsultan melalui website, sosial media, online market serta mengelola website dan media sosial perusahaan.</p>',
            'requirement' => '<p>- Min SMK/D3 Pemasaran dengan pengalaman minimal 1 tahun di bidang digital marketing.<br />- Menguasai pemasaran melalui digital (SEO, SEM, Google Ads, IC Ads,<br />FB Ads)<br />- Memahami Tiktok Ads menjadi nilai tambah<br />- Mampu membuat strategi pemasaran digital<br />- Mampu bekerja dalam team maupun individu</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'magnetsolusiintegra',
            'nama_lowongan' => 'Finance, Accounting, and Tax Manager',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Membuat dan melaporkan laporan keuangan perusahaan(L/R, Neraca, dil) kepada Direksi<br />- Membuat dan melaporkan laporan pajak perusahaan (PPH Badan, PPN, dIl) kepada Direksi<br />- Membuat strategi pengelolaan keuangan perusahaan<br />- Melakukan praktik legal terkait keuangan<br />- Membuat planning cost perusahaan bulanan dan tahuan<br />- Memonitor pekerjaan divisi Finance, Accounting &amp; Tax</p>',
            'requirement' => '<p>- Pendidikan min. S1 Akuntansi (Perpajakan)<br />- Usia maks. 40 tahun<br />- Pengalaman min. 8 tahun sebagai Manager Finance, Accounting &amp; Tax<br />- Diutamakan mempunyai pengalaman sejenis di industri perkayuan, shipping atau mining company<br />- Diutamakan mempunyai pengalaman RESTITUSI PAJAK (EKSPOR)<br />- Mempunyai sertifikat Brevet A &amp; B<br />- Berpengalaman mengurus izin usaha industri primer hasil hutan kayu (lUIPHHK) dan ekspor hasil hutan kayu<br />- Menguasai strategi pengelolaan keuangan, pembuatan laporan keuangan, laba rugi, aspek perpajakan terkait<br />- Mahir menggunakan Ms. Office<br />- Memiliki daya analisis kuat, teliti, komunikatif, kooperatif dan terbiasa bekerja dengan deadline, fast learner</p>',
            'daerah_penempatan' => 'Jakarta Utara'
        ]);


        DB::table('lowongan')->insert([
            'perusahaan_id' => 'magnetsolusiintegra',
            'nama_lowongan' => 'HR Consultant',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Membuat strategi marketing untuk bisa mengikuti perkembangan pasar dan kompetitor<br />- Memberikan presentasi Company Profile dan product knowledge kepada new customer<br />- Melakukan tugas lain yang ditetapkan Pimpinan sehubungan dengan fungsi Sales Supervisor<br />- Menyusun perencanaan kebijakan pemasaran secara administrasi maupun proses<br />- Mengimplementasikan strategi marketing dalam memasarkan product<br />- Mengkoordinasikan target pemasaran kepada tim marketing<br />- Menciptakan, menumbuhkan, dan memelihara kerja sama yang baik dengan konsumen<br />- Membuat target kerja dan mengajukan kepada Pimpinan terkait<br />- Membuat penawaran harga dan kerjasama penjualan<br />- Handling Complain dari customer dan mengkoordinasikan dengan tim<br />- Mengimplementasikan planing penjualan dengan sasaran yang tepat<br />- Membantu Penagihan invoice atau kredit macet dari customer<br />- Melakukan analisa pasar mengenai kebutuhan pasar</p>',
            'requirement' => '<p>- Min D1 hingga S1 Management, Publict Relation, Marketing management dll<br />- Usia Max 35 th (Laki-Laki / Perempuan)<br />- Berpengalaman dibidang yang sama min 1-3 tahun B2B, maupun B2C<br />- Lebih disukai berpengalaman dibidang Label/Kertas<br />- Menguasai Media Presentasi Ms Office mahir<br />- Memiliki Sim A (wajib)<br />- Bersedia bekerja mobile di lapangan untuk mencari customer<br />- Memahami pangsa pasar untuk produk kertas<br />- Berpenampilan menarik dan memiliki orientasi terhadap target</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'magnetsolusiintegra',
            'nama_lowongan' => 'Senior Sales Executive',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Memahami dan dapat menjelaskan product knowledge kepada customer<br />- Memenuhi target yang diberikan<br />- Membuat list calon customer untuk Visit &amp; Follow up customer dan Menghubungi customer secara berkala<br />- Melakukan kegiatan promosi product<br />- Membuat list data base customer (toko, end user dan bisnis percetakan)<br />- Melakukan pengajuan penawaran melalui email / penawaran secara langsung<br />- Melakukan penjualan sesuai dengan permintaan pasar<br />- Melakukan planing pemetaan wilayah pasar<br />- Membuat timeline proses prospect customer</p>',
            'requirement' => '<p>- Min D1 hingga S1 Management, Public Relation, Marketing management dIl<br />- Usia Max 35 th<br />- Berpengalaman dibidang yang sama min 2-3 tahun B2B, maupun B2C<br />- Lebih disukai berpengalaman dibidang Label/Kertas<br />- Energik, memiliki komunikasi yang baik dan lancar<br />- Memiliki Sim A / C dan memiliki kendaraan pribadi<br />- Bersedia bekerja mobile di lapangan untuk mencari customer<br />- Memahami pangsa pasar untuk produk kertas</p>',
            'daerah_penempatan' => '-'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'magnetsolusiintegra',
            'nama_lowongan' => 'Customer Engagement Associate',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Menyusun dan mengolah data base<br />- Melakukan market analisis<br />- Melakukan sales call dan visit sesuai dengan target market<br />- Melakukan presentasi produk jasa kepada klien.<br />- Menyiapkan dan mem-follow up penawaran.<br />- Melakukan Survei Client Satisfaction.<br />- Mengatasi komplain klien terkait jasa yang digunakan</p>',
            'requirement' => '<p>- Min. D3 semua jurusan, diutamakan background Manajemen Pemasaran<br />- Pengalaman min. 2 tahun di bidang Sales/Marketing Jasa<br />- Terbiasa melakukan presentasi baik offline maupun virtual<br />- Target oriented, relasi luas, terbiasa mobile<br />- Memahami sistem tender menjadi nilai tambah<br />- Terbiasa dengan Ms. Office, email, aplikasi video conference</p>',
            'daerah_penempatan' => 'Caringin, Bogor'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'magnetsolusiintegra',
            'nama_lowongan' => 'Senior Tax Accounting',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Membuat dan melaporkan laporan perpajakan perusahaan kepada Manager Finance, Accounting &amp; Tax<br />- Menjalankan dan melaporkan restitusi pajak perusahaan kepada Manager Finance, Accounting &amp; Tax<br />- Membuat dan melaporkan laporan keuangan perusahaan (PSAK, Neraca, Jurnal dil) kepada<br />- Manager Finance, Accounting &amp; Tax<br />- Melakukan praktik legal terkait keuangan<br />- Memonitor pekerjaan divisi Tax Accounting</p>',
            'requirement' => '<p>- Pendidikan min. S1 Akuntansi (Perpajakan), maks. 35 tahun<br />- Pengalaman min. 5 tahun dibidang Tax Accounting<br />- Diutamakan mempunyai pengalaman sejenis di industri perkayuan, shipping atau mining company<br />- Diutamakan mempunyai pengalaman RESTITUSI PAJAK (EKSPOR)<br />- Mempunyai sertifikat Brevet A &amp; B<br />- Menguasai strategi pengelolaan keuangan, pembuatan laporan keuangan, laba rugi dan aspek Perpajakan terkait<br />- Mahir menggunakan Ms. Office<br />- Memiliki daya analisis kuat, teliti, komunikatif, kooperatif, fast learner dan terbiasa bekerja dengan deadline</p>',
            'daerah_penempatan' => 'Gresik'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'magnetsolusiintegra',
            'nama_lowongan' => 'Supervisor Cost Accounting',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Membuat laporan keuangan dan rincian laporan keuangan transaksi kebutuhan proses produksi<br />- Memonitor harian dan bulanan laporan produksi<br />- Menghitung, membuat jurnal dan laporan produksi meliputi proses kerja dan menghitung cost bahan baku<br />- Membuat rekapitulasi dan laporan jumlah serua stok yang ada di gudang<br />- Melakukan stock opname paling sedikit satu bulan sekali atau situasional<br />- Memonitoring jadwal produksi dan memastikan produksi berjalan lancar sesuai jadwal<br />- Berkoordinasi dengan divisi lain untuk administrasi produksi<br />- Melakukan analisa costing &amp; melakukan improvement<br />- Membuat rekapitulasi data-data pendukung laporan keuangan yang berhubungan dengan Cost Factory</p>',
            'requirement' => '<p>- Pendidikan minimal Si, diutamakan dari jurusan Akuntansi<br />- Memiliki minimal 2 - 3 tahun pengalaman kerja di Cost Accounting<br />- Mengerti Akuntansi Biaya pada perusahaan manufaktur<br />- Menguasai Ms. Office dan Jurnal Transaksi.<br />- Memiliki kemampuan komunikasi dan numerik yang baik<br />- Pekerja keras dan mampu bekerja dengan deadline<br />- Mampu bekerjasama dengan tim dan individu<br />- Jujur dan memiliki tanggung jawab terhadap pekerjaan<br />- Menguasai Bahasa Mandarin (menjadi nilai tambah)</p>',
            'daerah_penempatan' => 'Surabaya Selatan'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'xaviermarks',
            'nama_lowongan' => 'eXpert Advisor',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Mempertemukan pemilik property yang akan dijual atau disewakan dengan klien.<br />- Mencari barang untuk bisa dijual atau disewakan di area yang di pilih oleh agen tersebut.<br />-Rekrut Agen untuk membentuk sebuah tim.<br />-FLEXIBLE TIME!</p>',
            'requirement' => '<p>- Mempunyai KTP<br />- Good Time Management<br />- Good Leadership Skill<br />-High Motivation and Spirit<br />- Mempunyai pengetahuan mengenai Digital Marketing dan Social Media<br />- Dapat berkerja Bersama tim. <br />- Niat yang tinggi untuk belajar.</p>',
            'daerah_penempatan' => 'Surabaya, Jakarta, Tangerang, Sidoarjo, Malang, Jember, Bandung, Bekasi, Kalimantan Barat, Semarang, Solo, Denpasar, Banyuwangi, dsb'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'xaviermarks',
            'nama_lowongan' => 'eXpert Advisor',
            'bentuk_pekerjaan' => 'Part-time',
            'job_desk' => '<p>- Mempertemukan pemilik property yang akan dijual atau disewakan dengan klien.<br />- Mencari barang untuk bisa dijual atau disewakan di area yang di pilih oleh agen tersebut.<br />-Rekrut Agen untuk membentuk sebuah tim.<br />-FLEXIBLE TIME!</p>',
            'requirement' => '<p>- Mempunyai KTP<br />- Good Time Management<br />- Good Leadership Skill<br />-High Motivation and Spirit<br />- Mempunyai pengetahuan mengenai Digital Marketing dan Social Media<br />- Dapat berkerja Bersama tim. <br />- Niat yang tinggi untuk belajar.</p>',
            'daerah_penempatan' => 'Surabaya, Jakarta, Tangerang, Sidoarjo, Malang, Jember, Bandung, Bekasi, Kalimantan Barat, Semarang, Solo, Denpasar, Banyuwangi, dsb'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'xaviermarks',
            'nama_lowongan' => 'eXpert Advisor',
            'bentuk_pekerjaan' => 'Freelance',
            'job_desk' => '<p>- Mempertemukan pemilik property yang akan dijual atau disewakan dengan klien.<br />- Mencari barang untuk bisa dijual atau disewakan di area yang di pilih oleh agen tersebut.<br />-Rekrut Agen untuk membentuk sebuah tim.<br />-FLEXIBLE TIME!</p>',
            'requirement' => '<p>- Mempunyai KTP<br />- Good Time Management<br />- Good Leadership Skill<br />-High Motivation and Spirit<br />- Mempunyai pengetahuan mengenai Digital Marketing dan Social Media<br />- Dapat berkerja Bersama tim. <br />- Niat yang tinggi untuk belajar.</p>',
            'daerah_penempatan' => 'Surabaya, Jakarta, Tangerang, Sidoarjo, Malang, Jember, Bandung, Bekasi, Kalimantan Barat, Semarang, Solo, Denpasar, Banyuwangi, dsb'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'xaviermarks',
            'nama_lowongan' => 'eXpert Advisor',
            'bentuk_pekerjaan' => 'Internship',
            'job_desk' => '<p>- Mempertemukan pemilik property yang akan dijual atau disewakan dengan klien.<br />- Mencari barang untuk bisa dijual atau disewakan di area yang di pilih oleh agen tersebut.<br />-Rekrut Agen untuk membentuk sebuah tim.<br />-FLEXIBLE TIME!</p>',
            'requirement' => '<p>- Mempunyai KTP<br />- Good Time Management<br />- Good Leadership Skill<br />-High Motivation and Spirit<br />- Mempunyai pengetahuan mengenai Digital Marketing dan Social Media<br />- Dapat berkerja Bersama tim. <br />- Niat yang tinggi untuk belajar.</p>',
            'daerah_penempatan' => 'Surabaya, Jakarta, Tangerang, Sidoarjo, Malang, Jember, Bandung, Bekasi, Kalimantan Barat, Semarang, Solo, Denpasar, Banyuwangi, dsb'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'ciptaoggifurindo',
            'nama_lowongan' => 'Admin PPIC',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- - </p>',
            'requirement' => '<p>- Pendidikan Minimal S1 Teknik Industri; <br />- Memiliki Pengalaman di bidangnya / fresh graduate diperbolehkan melamar; <br />- Memahami Production Process Planing & Control; <br />- Memahami Material Requirement Planing; <br />- Memahami Supply Chain Management; <br />- Memiliki Etos Kerja yang tinggi; <br />- Jujur & Bertanggung Jawab.</p>',
            'daerah_penempatan' => 'Mojokerto'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'ciptaoggifurindo',
            'nama_lowongan' => 'Sales',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Bertanggung jawab dalam proses perencanaan dan penyusunan strategi pencapaian target penjualan; <br />- Bertanggung jawab dalam pencapaian target penjualan pada area kerjanya serta mendukung tercapainya target  penjualan secara keseluruhan; <br />- Bertanggung jawab dalam melakukan kontak dan kunjungan ke pelanggan sesuai dengan perencanaan dan ketentuan yang berlaku; <br />-  Bertanggung jawab dalam handling komplain customer <br />- Bertanggung jawab dalam pengelolaan piutang customer; <br />- Bertanggung jawab dalam pencapaian target pertumbuhan customer </p>',
            'requirement' => '<p>- Pendidikan minimal D3, Usia max 35 tahun; <br />- Memiliki pengalaman kerja min. 3 tahun pada posisi yang setara; <br />- Memiliki kendaraan  sendiri dan SIM A/C; <br />- Bersedia melaksanakan perjalanan dinas ke luar kota; <br />- Memiliki etos kerja yang baik dan siap bekerja dengan sistem target; <br />- Mampu bekerjasama dalam tim, aktif, dan dinamis; <br />- Jujur, bersemangat, pantang menyerah, dan bertanggung jawab; <br />- Mempunyai kemampuan berkomunikasi yang baik </p>',
            'daerah_penempatan' => 'Surabaya'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'ciptaoggifurindo',
            'nama_lowongan' => 'Drafter',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Membuat Shopdrawing <br />- Membuat Assembly Instruction </p>',
            'requirement' => '<p>- Pendidikan S1 Arsitektur/Teknik Sipil <br />- Menguasai program autocad (2D), inventory dan solidwork <br />- Memiliki pengalaman sebagai drafter minimal 2 tahun (dibidang manufacture lebih diutamakan) <br />- Mampu membuat dan membaca gambar kerja dengan baik <br />- Memiliki kemampuan  problem solving yang baik <br />- Teliti, Gigih </p>',
            'daerah_penempatan' => 'Surabaya'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'ciptaoggifurindo',
            'nama_lowongan' => 'Product Designer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Mengembangkan produk baru atau meningkatkan yang sudah ada dengan menggunakan pemahaman di bidang teknologi, material, dan metode manufaktur untuk memperbaiki desain dan manfaat produk. <br />- Meneliti bahan, proses atau kebutuhan pasar <br />- Mengembangkanmedia promosi untuk kebutuhan marketing <br />- Membuat sketsa ide desain awal <br />- Memproduksi gambar final dan spesifikasi menggunakan tangan atau software komputer (CAD) </p>',
            'requirement' => '<p>- Pendidikan Minimum S1 Product  Design / Industrial Design / Graphic Design <br />- Pengalaman 1 tahun  di bidang yang sama <br />- Usia maksimal 30 tahun <br />- Memahami ilmu grafis, layouting dan cetak digital / offset <br />- Dapat mengoperasikan AUTOCAD, Sketchup, Corel Draw, Photoshop, Photography dan Software Design Product Lainnya <br />- Memiliki ketertarikan terhadap desain furniture <br />- Jujur, bersemangat dan bertanggung jawab <br />- Kreatif memiliki referensi yang baik, komunikasi dan mampu bekerja dalam tim </p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'grahamultibintang',
            'nama_lowongan' => 'Graphic Designer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Membuat content berupa foto dan video untuk kepentingan marketing online dan offline<br />- Mengkomunikasikan pesan, referensi, dan ide melalui desain-desain yang kreatif dan sesuai dengan key visual (KV)<br />- Melakukan digital imaging dari foto mentah menjadi bentuk desain kreatif<br />- Berkolaborasi dengan team marketing untuk meningkatkan brand image</p>',
            'requirement' => '<p>- Pendidikan minimal S1, lebih disukai dari jurusan DKV / Desain Produk / Desain Interior<br />- Pengalaman kerja minimal 1 tahun di bidang yang relevan, freshgraduate dipersilakan melamar<br />- Usia maksimal 28 tahun<br />- Menguasai software grafis <br />- Menguasai Software Desain 3D menjadi nilai tambah<br />- Menguasai software editing video (Adobe Premier, After Effect) menjadi nilai tambah<br />- Memahami dan menguasai Social Media Analyst<br />- Portofolio desain wajib dilampirkan</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'grahamultibintang',
            'nama_lowongan' => 'Accounting Staff',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Mengimplementasikan penggunaan Accounting Software System<br />- Mengimplementasikan sistem dan policy akuntansi di perusahaan<br />- Menyusun laporan keuangan perusahaan sesuai dengan standar akuntansi yang ada<br />- Menyusun laporan-laporan yang digunakan untuk kepentingan perpajakan<br />- Berkoordinasi dengan unit-unit terkait laporan keuangan yang masuk.</p>',
            'requirement' => '<p>- Pendidikan minimal S1 Akuntansi, minimal IPK 3.00<br />- Fresh Graduate dipersilakan melamar.<br />- Memahami sistem kerja akuntansi dan perpajakan<br />- Memiliki pengalaman kerja di KAP menjadi nilai tambah<br />- Lebih disukai memiliki sertifikasi Brevet A dan B<br />- Menguasai Microsoft Office<br />- Memiliki SIM A / SIM C<br />- Bersedia melakukan perjalanan dinas luar kota<br />- Usia maksimal 28 tahun</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'grahamultibintang',
            'nama_lowongan' => 'Recruitment Staff',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Melaksanakan proses rekrutmen karyawan dari awal hingga akhir untuk memenuhi kebutuhan tenaga kerja sesuai dengan SOP<br />- Mencari kandidat karyawan, menyotir, dan menyeleksi surat lamaran, dan melakukan psikotes.<br />- Koordinasi dengan user untuk proses seleksi di tahap selanjutnya<br />- Melakukan tugas administratif yang berhubungan dengan rekrutmen.</p>',
            'requirement' => '<p>- Pendidikan minimal S1 Psikologi<br />- Pengalaman kerja min. 2 tahun sebagai Recruitment Staff<br />- Familiar dan menguasai administrasi berbagai macam alat tes psikologi<br />- Memahami teknik interview berbasis BEI<br />- Memiliki kemampuan komunikasi dan negosiasi yang baik<br />- Terorganisir dan berorientasi pada detail<br />- Bersedia melakukan perjalanan dinas ke luar kota</p>',
            'daerah_penempatan' => 'Surabaya'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'grahamultibintang',
            'nama_lowongan' => 'Social Media Specialist',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Mencari referensi konten sehingga menghasilkan strategi brand communication yang efektif<br />- Meningkatkan engagement user-brand di media social<br />- Menjadwalkan posting social media secara bulanan dan mengalokasikan permintaan posting dari divisi lain<br />- Mengunggah konten dan membuat caption sesuai jadwal<br />- Menjawab comment / DM di media social<br />- Mendistribusikan powerful content ke offline distributor<br />- Proaktif menganalisa dan melaporkan hasil insight social media dari brand dan kompetitor</p>',
            'requirement' => '<p>- Pendidikan Minimal S1 dari jurusan yang relevan<br />- Pengalaman Minimal 1 tahun sebagai Social Media Specialist atau Digital Marketing<br />- Mampu menganalisa insight dan trend di media sosial (Instagram, Tiktok, Facebook)<br />- Mengerti dasar Copywriting, Adobe Photoshop dan Ai<br />- Memiliki passion di dunia media sosial, influencer, hingga E-commerce<br />- Mampu bekerja dalam tim</p>',
          'daerah_penempatan' => 'Surabaya'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'grahamultibintang',
            'nama_lowongan' => 'Purchasing Staff',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Menerima dan melakukan review surat permintaan barang dari seluruh bagian baik harian mingguan maupun bulanan.<br />- Melakukan seleksi terhadap supplier mengenai perbandingan penawaran harga, ketersediaan barang, kecepatan pengiriman serta kualitas<br />- Melakukan proses pembelian dari mulai permohonan, penawaran harga, penyiapan kelengkapan administrasi sampai kepada pengontrolan ketepatan kedatangan barang dari supllier serta aktif dalam monitoring stock<br />- Koordinasi dengan pihak internal dan eksternal</p>',
            'requirement' => '<p>- Pendidikan minimal S1 segala jurusan, diutamakan Teknik Industri dan Teknik Mesin<br />- Pengalaman minimal 2 tahun sebagai Purchasing Staff, diutamakan yang berpengalaman menangani pembelian mesin-mesin produksi dan sparepart - - Springbed &amp; Foam<br />- Menguasai bahasa Inggris (Aktif) dan bahasa Mandarin sebagai point plus<br />- Usia maksimal 30 tahun<br />- Memiliki inisiatif tinggi, kemampuan taktis, dan koordinasi dengan pihak internal maupun eksternal<br />- Memiliki kemampuan negosiasi dan persuasi yang baik<br />- Bersedia untuk melakukan perjalanan dinas (bila diperlukan)</p>',
          'daerah_penempatan' => 'Surabaya'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'grahamultibintang',
            'nama_lowongan' => 'Programmer',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Melakukan riset dan menganalisa kebutuhan internal perusahaan dari sistem yang dikembangkan dan perkembangan teknologi di luar <br />- Mengembangkan dan mengimplementasikan sistem ERP <br />- Mengembangkan dan melakukan maintenance terhadap sistem yang digunakan Troubleshooting</p>',
            'requirement' => '<p>- Pendidikan minimal S1 Sistem Informasi / Teknik Informatika <br />- Pengalaman minimal 2-3 tahun di bidang yang relevan, lebih disukai sebagai senior programmer atau software developer <br />- Menguasai Java Script, Laravel, Postgre SQL, Vue JS <br />- Lebih disukai memiliki pengalaman dalam mendokumentasikan dan mengembangkan Software System ERP <br />- Lebih disukai memahami program RDBMS <br />- Analitycal thinker dan memiliki kemampuan problem solving yang baik <br />- Komunikatif dan dapat bekerjasama dalam tim <br />- Terorganisir dan memiliki manajemen waktu yang baik <br />- Bersedia melakukan perjalanan dinas ke luar kota</p>',
          'daerah_penempatan' => 'Surabaya'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'grahamultibintang',
            'nama_lowongan' => 'Product Marketing Manager',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Mengembangkan produk furniture sesuai dengan analisis kebutuhan pelanggan dan riset trend pasar<br />- Menentukan strategi penetapan harga produk berdasarkan riset pasar, biaya produk, dan perkiraan permintaan produk<br />- Membuat dan mengeksekusi strategi pemasaran untuk meningkatkan penjualan produk furniture<br />- Berkomunikasi dengan pelanggan serta distributor untuk menciptakan solusi berkaitan dengan permasalahan-permasalahan produk</p>',
            'requirement' => '<p>- Pendidikan Minimal S1, lebih disukai jurusan Marketing Management atau International Business Management <br />- Preferably 2 - 3 tahun pengalaman kerja dibidang marketing, freshgraduate dipersilakan melamar<br />- Memiliki kemampuan berpikir analitis dan strategis yang baik<br />- Memiliki jiwa kepemimpinan<br />- Mampu berkomunikasi dengan baik<br />- Mampu bekerja dalam team</p>',
          'daerah_penempatan' => 'Lamongan'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'grahamultibintang',
            'nama_lowongan' => 'Product Development Staff',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Menguasai proses produksi secara menyeluruh <br />- Merencanakan dan mengawasi pembuatan sample dari awal hingga siap untuk diproduksi <br />- Melakukan pendataan material yang digunakan dalam pembuatan sample <br />- Menyusun dan merevisi pembuatan Buku Pedoman Produksi <br />- Mencari alternatif material / ornamen produk <br />- Menghitung Harga Pokok Produksi (HPP) <br />- Menganalisa tipe-tipe produk kompetitor </p>',
            'requirement' => '<p>- Pendidikan minimal S1, lebih disukai dari jurusan Teknik Industri, Teknik Kimia, Akuntansi, Desain Produk <br />- Usia maksimal 28 tahun <br />- Pengalaman minimal 1 tahun dalam pengembangan produk (freshgraduate dipersilahkan melamar) <br />- Menguasai cara hitung Harga Pokok Produksi <br />- Komunikatif, teliti dan terorganisir <br />- Bertanggungjawab dan memiliki semangat belajar yang tinggi <br />- Dapat mengoperasikan microsoft office <br />- Memiliki SIM A / SIM C </p>',
          'daerah_penempatan' => 'Gresik'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'grahamultibintang',
            'nama_lowongan' => 'Digital Marketing',
            'bentuk_pekerjaan' => 'Internship',
            'job_desk' => '<p>- Berkolaborasi dengan Digital Marketing team untuk meningkatkan socil media engagement <br />- Bertanggung jawab mengeksekusi aktivitas social media secara langsung <br />- Menghasilkan social media dan website contents yang menarik dan mengikuti trends <br />- Menganalisa dan membuat content planning  untuk social media yang sesuai dengan target brand </p>',
            'requirement' => '<p>- Mahasiswa semester akhir jurusan yang relevan (marketing, manajemen, ilmu komunikasi, DKV) <br />- Memiliki passion di dunia media sosial, influencer, hingga E-commerce <br />- Memiliki ketertarikan di digital marketing <br />- Memiliki kemampuan berkomunikasi yang baik <br />- Mampu bekerja dalam tim <br />- Menguasai software grafis menjadi nilai tambah </p>',
          'daerah_penempatan' => 'Surabaya'
        ]);

        DB::table('lowongan')->insert([
            'perusahaan_id' => 'grahamultibintang',
            'nama_lowongan' => 'Recruitment Internship',
            'bentuk_pekerjaan' => 'Internship',
            'job_desk' => '<p>- Mencari kandidat karyawan, menyotir, dan menyeleksi surat lamaran, dan melakukan psikotes untuk mendapatkan calon kandidat yang sesuai permintaan user, melalui database, media iklan online, media iklan cetak, dan jobfair. <br />- Menjadwalkan kandidat untuk mengikuti proses seleksi dengan menggunakan email, telepon, atau media pemberitahuan lainnya. <br />- Melakukan tugas administratif yang berhubungan dengan rekrutmen </p>',
            'requirement' => '<p>- Mahasiswa semester akhir Jurusan Psikologi <br />- Memiliki ketertarikan dibidang recruitment <br />- Memiliki kemampuan berkomunikasi yang baik <br />- Dapat bekerja dalam tim <br />- Mampu mengadministrasikan alat tes psikologi menjadi nilai tambah </p>',
          'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'tongtji',
            'nama_lowongan' => 'HRD STAFF',
            'bentuk_pekerjaan' => 'Full-time',
            'job_desk' => '<p>- Rekrutmen <br />- Training <br />- Administrasi (BPJS, database karyawan, surat menyurat, dll.) </p>',
            'requirement' => '<p>- Pria/Wanita <br />- Fresh Graduate/Berpengalaman <br />- Paham mengenai BPJS, Administrasi Karyawan, Proses Rekrutmen dan Training <br />- Bersedia Dinas ke Luar Kota (jika dibutuhkan) <br />- Dapat bekerjasama dalam tim maupun individu <br />- Menguasai alat tes psikologi (industri) </p>',
            'daerah_penempatan' => 'Surabaya'
        ]);
        DB::table('lowongan')->insert([
            'perusahaan_id' => 'bcamultifinance',
            'nama_lowongan' => 'Staf Marketing',
            'bentuk_pekerjaan' => 'Part-time',
            'job_desk' => '<p>- Memastikan target penjualan dan kualitas penjualan yang baik </p>',
            'requirement' => '<p>- Diutamakan Fresh Graduate <br />- Usia maksimal 27 tahun <br />- Pendidikan minimal SMA <br />- Memiliki SIM C dan kendaraan bermotor <br />- Berpenampilan menarik <br />- Mampu bekerja dengan target <br />- Memiliki kemampuan komunikasi yang baik <br />- Memiliki kemampuan negosiasi yang baik </p>',
            'daerah_penempatan' => 'Surabaya, Sidoarjo, Mojokerto, Malang'
        ]);











    }
}
