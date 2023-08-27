<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipeSatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipe_satuan')->insert([
            'id' => 1,
            'package' => 'carton',
            'satuan' => 'rim',
            'quantity' => 5,
        ]);
        DB::table('tipe_satuan')->insert([
            'id' => 2,
            'package' => 'lusin',
            'satuan' => 'bh',
            'quantity' => 12,
        ]);
    }
}
