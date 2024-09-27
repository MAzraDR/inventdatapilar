<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PilarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('datapilar')->insert([
            ['no_pilar' => 'PR. 217', 'kecamatan' => 'Sukun', 'kelurahan' => 'Karangbesuki/Pisangcandi', 'lokasi_pilar' => 'Tepi pertigaan Jalan Tambora', 'koordinat_x' => '677576.946', 'koordinat_y' => '9118666.334', 'kondisi' => 'Baik', 'keterangan' => '-', 'deskripsi' => '-'],
            ['no_pilar' => 'PR. 218', 'kecamatan' => 'Sukun', 'kelurahan' => 'Karangbesuki/Pisangcandi', 'lokasi_pilar' => 'Tepi Jl. Soputan/Jl. Jaya Giri', 'koordinat_x' => '677493.773', 'koordinat_y' => '9118838.036', 'kondisi' => 'Rusak Ringan', 'keterangan' => 'Pilar retak dan warna pudar', 'deskripsi' => '-'],
            ['no_pilar' => 'PR. 219', 'kecamatan' => 'Sukun', 'kelurahan' => 'Karangbesuki/Pisangcandi', 'lokasi_pilar' => '±10 meter dari Jl. Jaya Giri', 'koordinat_x' => '677344.101', 'koordinat_y' => '9118967.200', 'kondisi' => 'Baik', 'keterangan' => '-', 'deskripsi' => '-'],
            ['no_pilar' => 'PR. 220', 'kecamatan' => 'Sukun', 'kelurahan' => 'Karangbesuki/Pisangcandi', 'lokasi_pilar' => '±10 meter dari Kali Kutuk', 'koordinat_x' => '677224.338', 'koordinat_y' => '9118843.874', 'kondisi' => 'Rusak Berat', 'keterangan' => 'Pilar tertimbun material', 'deskripsi' => '-'],
            ['no_pilar' => 'PR. 221', 'kecamatan' => 'Sukun', 'kelurahan' => 'Karangbesuki/Pisangcandi', 'lokasi_pilar' => 'Tepi Kali Kutuk', 'koordinat_x' => '677081.949', 'koordinat_y' => '9118768.304', 'kondisi' => 'Rusak Ringan', 'keterangan' => 'Pilar retak-retak', 'deskripsi' => '-'],
            ['no_pilar' => 'PR. 222', 'kecamatan' => 'Sukun', 'kelurahan' => 'Karangbesuki/Pisangcandi', 'lokasi_pilar' => 'Tepi Kali Metro', 'koordinat_x' => '677049.086', 'koordinat_y' => '9118886.468', 'kondisi' => 'Rusak Ringan', 'keterangan' => 'Pilar retak, nama tidak terbaca dan warna pudar', 'deskripsi' => '-'],
            ['no_pilar' => 'PR. 289', 'kecamatan' => 'Sukun', 'kelurahan' => 'Gadang/Kebonsari', 'lokasi_pilar' => 'Komplek Perumahan Garaya', 'koordinat_x' => '679586.342', 'koordinat_y' => '9112274.377', 'kondisi' => 'Baik', 'keterangan' => '-', 'deskripsi' => '-'],
            // Data kecamatan Blimbing
            ['no_pilar' => 'PR. 061', 'kecamatan' => 'Blimbing', 'kelurahan' => 'Balearjosari/Arjosari', 'lokasi_pilar' => 'Tepi jalan Teluk Cendrawasih', 'koordinat_x' => '683266.244', 'koordinat_y' => '9123049.591', 'kondisi' => 'Baik', 'keterangan' => '-', 'deskripsi' => '-'],
            ['no_pilar' => 'PR. 062', 'kecamatan' => 'Blimbing', 'kelurahan' => 'Balearjosari/Arjosari', 'lokasi_pilar' => 'Tepi sungai jembatan Kali Mewek', 'koordinat_x' => '683027.211', 'koordinat_y' => '9123083.762', 'kondisi' => 'Rusak Ringan', 'keterangan' => 'Tanahnya longsor', 'deskripsi' => '-'],
            ['no_pilar' => 'PR. 063', 'kecamatan' => 'Blimbing', 'kelurahan' => 'Balearjosari/Arjosari', 'lokasi_pilar' => 'Tepi Sungai Mewek', 'koordinat_x' => '682805.874', 'koordinat_y' => '9123202.614', 'kondisi' => 'Baik', 'keterangan' => '-', 'deskripsi' => '-'],
            ['no_pilar' => 'PR. 064', 'kecamatan' => 'Blimbing', 'kelurahan' => 'Balearjosari/Arjosari', 'lokasi_pilar' => 'Tepi sungai 100 m dari jalan raya Arjosari', 'koordinat_x' => '682610.934', 'koordinat_y' => '9123342.403', 'kondisi' => 'Baik', 'keterangan' => '-', 'deskripsi' => '-'],
            ['no_pilar' => 'PR. 065', 'kecamatan' => 'Blimbing', 'kelurahan' => 'Balearjosari/Polowijen', 'lokasi_pilar' => 'Tepi jalan', 'koordinat_x' => '682136.804', 'koordinat_y' => '9123570.972', 'kondisi' => 'Rusak Ringan', 'keterangan' => 'Nama pilar tidak terbaca', 'deskripsi' => '-'],
            // Add more records here as necessary
        ]);
    }
}
