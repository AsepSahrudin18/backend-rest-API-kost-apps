<?php

namespace Database\Seeders\Auth;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
        $roles = [
            [
                "id" => 1,
                "name" => 'customer',
                'description' => 'Berperan sebagai pencari kost, bisa melakukan booking kamar kost dan memesan kost yang direkomendasikan'
            ],
            [
                "id" => 2,
                "name" => 'pemilik',
                'description' => 'Berperan sebagai pemilik kost, bertugas mengelola dashboard kost yang di postingan sesuai dengan kepemilikannya'
            ],
            [
                "id" => 3,
                "name" => 'administrator',
                'description' => 'Berperan sebagai admin aplikasi kost secara keseluruhan, bertugas mengelola transaksi keseluruhan aplikasi kost termasuk bisa mengelola dashboard admin untuk melakukan operasi update role dan hak akses'
            ],
        ];
        DB::table('roles')->insert($roles);
    }
}
