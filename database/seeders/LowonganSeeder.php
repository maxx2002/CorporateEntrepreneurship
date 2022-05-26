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
            'job_desk' => 'Bertanggung jawab dalam administrasi dan pengadaan dan/atau pembelian kebutuhan-kebutuhan setiap departemen, seperti barang, lisensi program, furniture, dan sebagainya dengan melakukan seleksi vendor dalam melakukan transaksi.',
            'requirement' => '<p>- Laki-laki<br />- Pendidikan minimal strata 1 (terbuka untuk semua jurusan)<br />- Pengalaman minimal 1 tahun bekerja di bidang Purchasing<br />- Berpengalaman dalam administrasi dan proses seleksi vendor<br />- Menguasai Microsoft Office (excel, word, power point, dan visio) dan google workspace<br />- Up to date terhadap teknologi digital</p>',
            'daerah_penempatan' => 'Makassar'
        ]);
    }
}
