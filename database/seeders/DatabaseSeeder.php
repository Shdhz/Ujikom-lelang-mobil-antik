<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder; 
use App\Models\kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //     \App\Models\barang::factory(3)->create();

    //     \App\Models\::factory()->create([
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //     ]);

    $kategori=[
        [
            "kategori_tahun"=>"1998",
        ],
        [
            "kategori_tahun"=>"1999",
        ],
        [
            "kategori_tahun"=>"2000",
        ],
    ];
    foreach ($kategori as $key => $value) {
        kategori::create($value);
    }
    
    }
}
