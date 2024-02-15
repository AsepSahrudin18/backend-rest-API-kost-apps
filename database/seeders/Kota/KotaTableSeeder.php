<?php

namespace Database\Seeders\Kota;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class KotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kota')->delete();
        $kota = [
            [
                "id"         => 1,
                "nama_kota"  => "Jakarta Barat",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id"         => 2,
                "nama_kota"  => "Jakarta Timur",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id"         => 3,
                "nama_kota"  => "Jakarta Utara",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id"         => 4,
                "nama_kota"  => "Jakarta Selatan",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id"         => 5,
                "nama_kota"  => "Jakarta Pusat",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
        ];
        DB::table('kota')->insert($kota);
    }
}
