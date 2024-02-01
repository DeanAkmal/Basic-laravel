<?php

namespace Database\Seeders;

use Illuminate\Support\STR;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class pengaduan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nik = DB::table("masyarakats_tables")->insertGetId([
            "nik" => "3210505276789",
            "nama"=> "Bayu Chandra Juliani",
            "username"=> "Bayu",
            "password"=> substr(md5(STR::random(32)),0,32),
            "telp"=> "08987262155",
        ]);

        DB::table("pengaduans_tables")->insert([
            "id_pengaduan" => random_int(1,20),
            "tgl_pengaduan"=> now(),
            "nik" => "3210505276789",
            "isi_laporan"=> Str::random(255),
            "foto"=> Str::random(255),
            "status" => "0",
        ]);

    }
}