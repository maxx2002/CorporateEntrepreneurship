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
    }
}
