<?php

use Illuminate\Database\Seeder;

class blogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("INSERT INTO `blogs` (`id`, `judul`, `kategori`, `content`, `img`, `created_at`, `updated_at`) VALUES (1, 'Agar lulus SBMPTN', 'Edukasi', 'Tips agar lulus sbmptn, Lorem ipsum dolor sit amet', NULL, '2019-11-19 00:40:56', '2019-11-19 00:57:26');
        INSERT INTO `blogs` (`id`, `judul`, `kategori`, `content`, `img`, `created_at`, `updated_at`) VALUES (2, 'PUBG', 'Game', 'Winner winner chicken dinner', NULL, '2019-11-19 00:46:06', '2019-11-19 00:46:06');
        INSERT INTO `blogs` (`id`, `judul`, `kategori`, `content`, `img`, `created_at`, `updated_at`) VALUES (3, 'Tips lolos SNMPTN', 'Edukasi', 'Tips lolos SNMPTN, Lorem ipsum dolor sit amet', NULL, '2019-11-19 00:47:12', '2019-11-19 00:57:00');
        INSERT INTO `blogs` (`id`, `judul`, `kategori`, `content`, `img`, `created_at`, `updated_at`) VALUES (4, 'Mobile Legend', 'Game', 'Good game well played', NULL, '2019-11-19 00:57:48', '2019-11-19 00:57:48');
        INSERT INTO `blogs` (`id`, `judul`, `kategori`, `content`, `img`, `created_at`, `updated_at`) VALUES (5, 'Dota 2', 'Game', 'Good game well played', NULL, '2019-11-19 00:58:08', '2019-11-19 00:58:08');
        INSERT INTO `blogs` (`id`, `judul`, `kategori`, `content`, `img`, `created_at`, `updated_at`) VALUES (6, 'AMD Ryzen', 'Berita', 'AMD mengeluarkan processor dengan nama Ryzen', NULL, '2019-11-19 01:06:24', '2019-11-19 01:06:44');
        INSERT INTO `blogs` (`id`, `judul`, `kategori`, `content`, `img`, `created_at`, `updated_at`) VALUES (7, 'Asus mengeluarkan smartphone baru', 'Berita', 'Asus lorem ipsum dolor sit amet', NULL, '2019-11-19 01:22:41', '2019-11-19 01:22:41');        
        ");
    }
}
