<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndustriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('industri')->insert([
            'perusahaan_id' => 'CaravanStudio',
            'industri_name' => 'Art',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'AstraIzuzu',
            'industri_name' => 'Automotif',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'WarnaWarniMedia',
            'industri_name' => 'Advertisement',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'wismilak',
            'industri_name' => 'Manufacturing',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'bca',
            'industri_name' => 'Banking',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'HotelCiputraWorld',
            'industri_name' => 'Hospitality',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'platinum',
            'industri_name' => 'Manufacturing',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'ucmakassar',
            'industri_name' => 'Education',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'wings',
            'industri_name' => 'Consumer Goods',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'marketingofficeciputra',
            'industri_name' => 'Property',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'tancorp',
            'industri_name' => 'Consumer Goods',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'tancorp',
            'industri_name' => 'Food and Beverage',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'mceasy',
            'industri_name' => 'Logistic Transportation',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'siantartop',
            'industri_name' => 'Food and Beverage',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'vitapharm',
            'industri_name' => 'Manufacturing',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'ucsurabaya',
            'industri_name' => 'Education',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'ucsurabaya',
            'industri_name' => 'Education',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'c+c&co',
            'industri_name' => 'Art',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'bcamultifinance',
            'industri_name' => 'Banking',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'komunal',
            'industri_name' => 'Financial Technology',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'tongtji',
            'industri_name' => 'Food and Beverage',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'orangtua',
            'industri_name' => 'Food and Beverage',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'prudential',
            'industri_name' => 'Insurance',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'grahamultibintang',
            'industri_name' => 'Manufacturing',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'ciptaoggifurindo',
            'industri_name' => 'Manufacturing',
        ]);
        DB::table('industri')->insert([
            'perusahaan_id' => 'xaviermarks',
            'industri_name' => 'Property',
        ]);
    }
}
