<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =  Barang::create([
            'nama_barang' => 'Samsung A50',
            'gambar' => 'Samsung_A50.jpg',
            'harga' => '3000000',
            'stok' => '50',
            'keterangan' => 'Good',
        ]);
        $data->save();
        $data =  Barang::create([
            'nama_barang' => 'Samsung A50s',
            'gambar' => 'Samsung_A50s.jpg',
            'harga' => '3500000',
            'stok' => '50',
            'keterangan' => 'Good',
        ]);
        $data->save();
        $data =  Barang::create([
            'nama_barang' => 'Samsung A51',
            'gambar' => 'Samsung_A51.jpg',
            'harga' => '4000000',
            'stok' => '50',
            'keterangan' => 'Good',
        ]);
        $data->save();
        $data =  Barang::create([
            'nama_barang' => 'Iphone X',
            'gambar' => 'Iphone_X.jpg',
            'harga' => '10000000',
            'stok' => '50',
            'keterangan' => 'Good',
        ]);
        $data->save();$data =  Barang::create([
            'nama_barang' => 'Iphone 8+',
            'gambar' => 'Iphone_8plus.jpg',
            'harga' => '8000000',
            'stok' => '50',
            'keterangan' => 'Good',
        ]);
        $data->save();
        $data =  Barang::create([
            'nama_barang' => 'Iphone 11 Pro Max',
            'gambar' => 'Iphone_11_Pro_Max.jpg',
            'harga' => '25000000',
            'stok' => '50',
            'keterangan' => 'Good',
        ]);
        $data->save();
    }
}
