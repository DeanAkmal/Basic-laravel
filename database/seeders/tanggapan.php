<?php

namespace Database\Seeders;

use Illuminate\Support\STR;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tanggapan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $petugasID = DB::table("pertugases_tables")->insertGetId([
            "id_petugas" => "01",
            "nama_petugas"=> "Wibu alok",
            "username"=> "alok",
            "password"=> substr(md5(STR::random(32)),0,32),
            "telp"=> "089625509269",
            "level"=> "admin",
        ]);

        $pengaduanID = DB::table("pengaduans_tables")->insertGetId([
           
            "id_pengaduan" => "01",
            "tgl_pengaduan"=> now(),
            "nik" => "3210505276789",
            "isi_laporan"=> "laporan2",
            "foto"=> "foto1",
            "status" => "proses",
        ]);

        DB::table("tanggapans_tables")->insert([
            "id_tanggapan" => "01",
            "id_pengaduan"=> $pengaduanID,
            "tgl_tanggapan"=> now(),
            "tanggapan" => STR::random(255),
            "id_petugas"=> $petugasID,
        
        ]);
    }
}
