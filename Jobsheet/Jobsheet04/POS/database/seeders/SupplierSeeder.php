<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'S001',
                'supplier_nama' => 'PT. Elektronik Jaya',
                'supplier_alamat' => 'Jl. Veteran No. 10, Kota Kediri',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'S002',
                'supplier_nama' => 'CV. Pakaian Modern',
                'supplier_alamat' => 'Jl. Sudirman No. 5, Kota Bandung',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'S003',
                'supplier_nama' => 'UD. Makanan Enak',
                'supplier_alamat' => 'Jl. Diponegoro No. 20, Kota Surabaya',
            ],
            [
                'supplier_id' => 4,
                'supplier_kode' => 'S004',
                'supplier_nama' => 'PT. Minuman Segar',
                'supplier_alamat' => 'Jl. Gatot Subroto No. 15, Kota Jakarta',
            ],
            [
                'supplier_id' => 5,
                'supplier_kode' => 'S005',
                'supplier_nama' => 'CV. Peralatan Rumah Tangga',
                'supplier_alamat' => 'Jl. Merdeka No. 8, Kota Semarang',
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
