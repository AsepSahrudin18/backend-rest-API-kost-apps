<?php

namespace Database\Seeders\Fasilitas;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class FasilitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fasilitas')->delete();
        $fasilitas = [
            [
                "id" => 1,
                'fasilitas' => 'Listrik',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => 2,
                'fasilitas' => 'Wifi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => 3,
                'fasilitas' => 'Rak',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => 4,
                'fasilitas' => 'Kasur',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => 5,
                'fasilitas' => 'AC',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => 6,
                'fasilitas' => 'Laundry',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => 7,
                'fasilitas' => 'Meja Belajar',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => 8,
                'fasilitas' => 'Kursi Belajar',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => 9,
                'fasilitas' => 'Kipas Angin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => 10,
                'fasilitas' => 'Kamar Dalam',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => 11,
                'fasilitas' => 'Air',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => 12,
                'fasilitas' => 'Dapur Bersama',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('fasilitas')->insert($fasilitas);
    }
}
