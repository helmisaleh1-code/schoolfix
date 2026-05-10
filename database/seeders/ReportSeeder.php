<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Report;

class ReportSeeder extends Seeder
{
    public function run(): void
    {
        Report::create([
            'reporter_name' => 'Andi Pratama',
            'location' => 'Lab Komputer 1',
            'damage_type' => 'Komputer Tidak Menyala',
            'description' => 'Salah satu komputer di lab tidak bisa dinyalakan saat praktikum.',
            'status' => 'Menunggu',
            'report_date' => '2026-05-11',
        ]);

        Report::create([
            'reporter_name' => 'Siti Aisyah',
            'location' => 'Kelas 12 IPA 1',
            'damage_type' => 'Proyektor Rusak',
            'description' => 'Proyektor tidak menampilkan gambar saat guru presentasi.',
            'status' => 'Diproses',
            'report_date' => '2026-05-10',
        ]);

        Report::create([
            'reporter_name' => 'Budi Santoso',
            'location' => 'Perpustakaan',
            'damage_type' => 'Lampu Mati',
            'description' => 'Lampu di sudut perpustakaan mati dan membuat area gelap.',
            'status' => 'Selesai',
            'report_date' => '2026-05-09',
        ]);

        Report::create([
            'reporter_name' => 'Rina Oktavia',
            'location' => 'Lab Komputer 2',
            'damage_type' => 'Keyboard Rusak',
            'description' => 'Beberapa tombol keyboard tidak berfungsi dengan baik.',
            'status' => 'Menunggu',
            'report_date' => '2026-05-08',
        ]);

        Report::create([
            'reporter_name' => 'Deni Saputra',
            'location' => 'Ruang Guru',
            'damage_type' => 'Printer Bermasalah',
            'description' => 'Printer sering paper jam saat mencetak dokumen.',
            'status' => 'Diproses',
            'report_date' => '2026-05-07',
        ]);
    }
}