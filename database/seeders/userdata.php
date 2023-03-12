<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\User;
class userdata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            [
                "name"=>"Admin",
                "username"=>"Dhafa",
                "email"=>"Dhafa@gmail.com",
                "password"=> bcrypt('123456'),
                "alamat"=>"",
                "role"=>"admin",

            ],
            [
                "name"=>"penjual",
                "username"=>"penjual1",
                "email"=>"penjual1@gmail.com",
                "password"=> bcrypt('123456'),
                "alamat"=>"Kp.sukarame",
                "role"=>"penjual",
            ],
            [
                "name"=>"pembeli",
                "username"=>"pembeli1",
                "email"=>"pembeli1@gmail.com",
                "password"=> bcrypt('123456'),
                "alamat"=>"",
                "role"=>"pembeli",
            ]
            ];
            foreach ($users as $key => $value) {
                User::create($value);
            }
            
            // $barang=[
            //     [
            //         "nama" => "Lamborghini Miura P400S",
            //         "tgl_input" => "Lamborghini Miura P400S",
            //         "harga_awal" => "Rp.200.000.000",
            //         "deskripsi" => "mobil sangat antik",
            //         "foto" => "mobil.jpg",
            //         "kategori" => "2000",
            //     ]
            //     ];
            //     foreach ($barang as $key => $value) {
            //         User::create($value);
            //     }
                
    }
}
