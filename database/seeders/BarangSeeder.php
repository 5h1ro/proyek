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
            'keterangan' => 'Baru',
        ]);
        $data->save();
        $data =  Barang::create([
            'nama_barang' => 'Samsung A50s',
            'gambar' => 'Samsung_A50s.jpg',
            'harga' => '3500000',
            'stok' => '50',
            'keterangan' => 'Baru',
        ]);
        $data->save();
        $data =  Barang::create([
            'nama_barang' => 'Samsung A51',
            'gambar' => 'Samsung_A51.jpg',
            'harga' => '4000000',
            'stok' => '50',
            'keterangan' => 'Baru',
        ]);
        $data->save();
        $data =  Barang::create([
            'nama_barang' => 'Iphone X',
            'gambar' => 'Iphone_X.jpg',
            'harga' => '10000000',
            'stok' => '50',
            'keterangan' => 'Baru',
        ]);
        $data->save();
        $data =  Barang::create([
            'nama_barang' => 'Iphone 8+',
            'gambar' => 'Iphone_8plus.jpg',
            'harga' => '8000000',
            'stok' => '50',
            'keterangan' => 'Bekas',
        ]);
        $data->save();
        $data =  Barang::create([
            'nama_barang' => 'Iphone 11 Pro Max',
            'gambar' => 'Iphone_11_Pro_Max.jpg',
            'harga' => '25000000',
            'stok' => '50',
            'keterangan' => 'Bekas',
        ]);
        $data->save();
        $data =  Barang::create([
            'nama_barang' => 'Asus ROG Phone',
            'gambar' => 'Asus_ROG_Phone.jpg',
            'harga' => '25000000',
            'stok' => '50',
            'keterangan' => 'Baru',
        ]);
        $data->save();
        $data =  Barang::create([
            'nama_barang' => 'Asus ROG Phone 2',
            'gambar' => 'Asus_ROG_Phone_2.jpg',
            'harga' => '25000000',
            'stok' => '50',
            'keterangan' => 'Baru',
        ]);
        $data->save();
        $data =  Barang::create([
            'nama_barang' => 'Asus ROG Phone 3',
            'gambar' => 'Asus_ROG_Phone_3.jpg',
            'harga' => '25000000',
            'stok' => '50',
            'keterangan' => 'Baru',
        ]);
        $data->save();
        $data =  Barang::create([
            'nama_barang' => 'Xiaomi Blackshark',
            'gambar' => 'Xiaomi_Blackshark.jpg',
            'harga' => '25000000',
            'stok' => '50',
            'keterangan' => 'Baru',
        ]);
        $data->save();
        $data =  Barang::create([
            'nama_barang' => 'Xiaomi Blackshark 2',
            'gambar' => 'Xiaomi_Blackshark_2.jpg',
            'harga' => '25000000',
            'stok' => '50',
            'keterangan' => 'Baru',
        ]);
        $data->save();
        $data =  Barang::create([
            'nama_barang' => 'Xiaomi Blackshark 3',
            'gambar' => 'Xiaomi_Blackshark_3.jpg',
            'harga' => '25000000',
            'stok' => '50',
            'keterangan' => 'Baru',
        ]);
        $data->save();
        $data =  Barang::create([
            'nama_barang' => 'Realme X2',
            'gambar' => 'Realme_X2.jpg',
            'harga' => '25000000',
            'stok' => '50',
            'keterangan' => 'Baru',
        ]);
        $data->save();
        $data =  Barang::create([
            'nama_barang' => 'Realme XT',
            'gambar' => 'Realme_Xt.jpg',
            'harga' => '25000000',
            'stok' => '50',
            'keterangan' => 'Baru',
        ]);
        $data->save();
        $data =  Barang::create([
            'nama_barang' => 'Realme X3',
            'gambar' => 'Realme_X3.jpg',
            'harga' => '25000000',
            'stok' => '50',
            'keterangan' => 'Baru',
        ]);
        $data->save();
    }
}
