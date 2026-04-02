<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sekolahs')->insert([
            'nm_skl'=>'SMKN TEGALWARU',
            'alamat'=>'Jl. Raya Tegalwaru Purwakarta',
            'pos'=>'41111',
            'npsn'=>'20229756',
            'telp_fax'=>'(0264) 200724',
            'email'=>'smkntegalwaru@gmail.com',
            'website'=>'https:://www.smkntegalwaru.sch.id',
            'kepsek'=>'Soni Wibawa, M.Kom.',
            'nip'=>'123',
            'tagline'=>'<h1 class="fw-bold"><font color="#397b21"><span style="font-family: Impact;">Selamat Datang di</span></font></h1><h1 class=""><font color="#e79439"><span style="font-family: Impact;">SMK NEGERI TEGALWARU PURWAKARTA</span></font></h1><h4 class=""><font color="#e79439" face="Arial Black"><span style="font-family: Impact;">Kampung Ilmu Mengabdi Untuk Negeri</span></font></h4>',
            'logo'=>'img/sekolah/L2UBn4IduEyvYTat2FebDdwjTPIEGuj8S1wyJI4K.png',
            'logoweb'=>'img/sekolah/nABnomkjk36QZCPIB7AlWbQDKscba9Nt9cdzVxVx.png',
            'banner'=>'img/sekolah/qAwFgmfp0QPOoZTyZ5WeUZ5IXOtzOgvYgacQ0ifU.jpg',
            'logofb'=>'img/sekolah/K9LMtBewsK2OkhESZNhzKxO2RvqXhWDJ6hM6caQD.png',
            'urlfb'=>'https://www.facebook.com/',
            'logoig'=>'img/sekolah/qI6A3nH8cLMXZItZzL6Of1zQRrFAzF3HnxVT6dOe.png',
            'urlig'=>'https://www.instagram.com',
            'logotiktok'=>'img/sekolah/DwBVUSAyywvWvYfGIZsbBh5htGkKO8IA9akDv23z.png',
            'urltiktok'=>'https://www.tiktok.com/',
            'logoyt'=>'img/sekolah/W0vcgNGjQoMNo4XcZiujf7DXVFrFybsrGzlIpibh.png',
            'urlyt'=>'https://www.youtube.com'
            
        ]);
    }
}
