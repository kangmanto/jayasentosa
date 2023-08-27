<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert([
            'id_produk' => 1,
            'id_kategori' => 1,
            'kode_produk' => 'P000001',
            'tipe_satuan_id' => 1,
            'nama_produk' => 'HVS 70g',
            'merk' => 'SIDU',
            'harga_beli' => 40000,
            'diskon' => 0,
            'harga_jual' => 45000,
            'harga_jual_per_pack' => 240000,
            'stok' => 1,
            
        ]);
    }
}
