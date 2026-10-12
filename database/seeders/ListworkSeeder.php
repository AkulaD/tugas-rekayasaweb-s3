<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Listwork;

class ListworkSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['judul_anime' => '86 EIGHTY-SIX', 'tipe' => 'TV Series', 'tahun_rilis' => 2021, 'genre_utama' => 'Sci-Fi', 'sumber_adaptasi' => 'Light Novel', 'sutradara' => 'Toshimasa Ishii', 'jumlah_episode' => 23, 'musim_rilis' => 'Spring 2021', 'nama_file_gambar' => '86.jpg'],
            ['judul_anime' => 'Hachigatsu no Cinderella Nine', 'tipe' => 'Promo Video', 'tahun_rilis' => 2016, 'genre_utama' => 'Sports', 'sumber_adaptasi' => 'Game', 'sutradara' => 'Susumu Kudou', 'jumlah_episode' => 1, 'musim_rilis' => 'Summer 2016', 'nama_file_gambar' => 'Hachigatsu no Cinderella Nine PV.jpg'],
            ['judul_anime' => 'High School Fleet Movie', 'tipe' => 'Movie', 'tahun_rilis' => 2020, 'genre_utama' => 'Military', 'sumber_adaptasi' => 'Original', 'sutradara' => 'Jun Nakagawa', 'jumlah_episode' => 1, 'musim_rilis' => 'Winter 2020', 'nama_file_gambar' => 'High School Fleet Movie.jpg'],
            ['judul_anime' => 'Kaguya-sama wa Kokurasetai', 'tipe' => 'TV Series', 'tahun_rilis' => 2019, 'genre_utama' => 'Comedy', 'sumber_adaptasi' => 'Manga', 'sutradara' => 'Mamoru Hatakeyama', 'jumlah_episode' => 12, 'musim_rilis' => 'Winter 2019', 'nama_file_gambar' => 'Kaguya-sama wa Kokurasetai.jpg'],
            ['judul_anime' => 'Lycoris Recoil', 'tipe' => 'TV Series', 'tahun_rilis' => 2022, 'genre_utama' => 'Action', 'sumber_adaptasi' => 'Original', 'sutradara' => 'Shingo Adachi', 'jumlah_episode' => 13, 'musim_rilis' => 'Summer 2022', 'nama_file_gambar' => 'Lycoris Recoil.jpg'],
            ['judul_anime' => 'Make Heroine ga Oosugiru!', 'tipe' => 'TV Series', 'tahun_rilis' => 2024, 'genre_utama' => 'Romance', 'sumber_adaptasi' => 'Light Novel', 'sutradara' => 'Shouta Itou', 'jumlah_episode' => 12, 'musim_rilis' => 'Summer 2024', 'nama_file_gambar' => 'Make Heroine ga Oosugiru!.jpg'],
            ['judul_anime' => 'NieR:Automata Ver1.1a', 'tipe' => 'TV Series', 'tahun_rilis' => 2023, 'genre_utama' => 'Action', 'sumber_adaptasi' => 'Game', 'sutradara' => 'Ryouji Masuyama', 'jumlah_episode' => 24, 'musim_rilis' => 'Winter 2023', 'nama_file_gambar' => 'NieRAutomata Ver1.1a.jpg'],
            ['judul_anime' => 'Ryuugajou Nanana no Maizoukin', 'tipe' => 'TV Series', 'tahun_rilis' => 2014, 'genre_utama' => 'Mystery', 'sumber_adaptasi' => 'Light Novel', 'sutradara' => 'Kanta Kamei', 'jumlah_episode' => 11, 'musim_rilis' => 'Spring 2014', 'nama_file_gambar' => 'Ryuugajou Nanana no Maizoukin.jpg'],
            ['judul_anime' => 'Saenai Heroine no Sodatekata', 'tipe' => 'TV Series', 'tahun_rilis' => 2015, 'genre_utama' => 'Romance', 'sumber_adaptasi' => 'Light Novel', 'sutradara' => 'Kanta Kamei', 'jumlah_episode' => 13, 'musim_rilis' => 'Winter 2015', 'nama_file_gambar' => 'Saenai Heroine no Sodatekata.jpg'],
            ['judul_anime' => 'Sword Art Online', 'tipe' => 'TV Series', 'tahun_rilis' => 2012, 'genre_utama' => 'Fantasy', 'sumber_adaptasi' => 'Light Novel', 'sutradara' => 'Tomohiko Itou', 'jumlah_episode' => 25, 'musim_rilis' => 'Summer 2012', 'nama_file_gambar' => 'sword-art-online.jpg'],
        ];

        foreach ($data as $item) {
            Listwork::create($item);
        }
    }
}