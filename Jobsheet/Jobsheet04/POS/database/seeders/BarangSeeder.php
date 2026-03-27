<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'B001',
                'barang_nama' => 'Laptop ASUS ROG',
                'harga_beli' => 15000000,
                'harga_jual' => 20000000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2,
                'barang_kode' => 'B002',
                'barang_nama' => 'Kaos Polos Hitam',
                'harga_beli' => 50000,
                'harga_jual' => 100000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 3,
                'barang_kode' => 'B003',
                'barang_nama' => 'Cokelat Batang',
                'harga_beli' => 20000,
                'harga_jual' => 50000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 4,
                'barang_kode' => 'B004',
                'barang_nama' => 'Air Mineral Botol',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 5,
                'barang_kode' => 'B005',
                'barang_nama' => 'Panci Stainless Steel',
                'harga_beli' => 300000,
                'harga_jual' => 500000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 1,
                'barang_kode' => 'B006',
                'barang_nama' => 'Smartphone Samsung Galaxy',
                'harga_beli' => 8000000,
                'harga_jual' => 12000000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 2,
                'barang_kode' => 'B007',
                'barang_nama' => 'Jaket Jeans Biru',
                'harga_beli' => 150000,
                'harga_jual' => 300000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'barang_kode' => 'B008',
                'barang_nama' => 'Keripik Kentang',
                'harga_beli' => 10000,
                'harga_jual' => 25000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 4,
                'barang_kode' => 'B009',
                'barang_nama' => 'Soda Botol',
                'harga_beli' => 8000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'B010',
                'barang_nama' => 'Set Alat Makan',
                'harga_beli' => 200000,
                'harga_jual' => 400000,
            ],
            [
                'barang_id' => 11,
                'kategori_id' => 1,
                'barang_kode' => 'B011',
                'barang_nama' => 'Headphone Sony',
                'harga_beli' => 500000,
                'harga_jual' => 800000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 2,
                'barang_kode' => 'B012',
                'barang_nama' => 'Rok Mini Merah',
                'harga_beli' => 100000,
                'harga_jual' => 200000,
            ],[
                'barang_id' => 13,
                'kategori_id' => 3,
                'barang_kode' => 'B013',
                'barang_nama' => 'Permen Karet',
                'harga_beli' => 2000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 4,
                'barang_kode' => 'B014',
                'barang_nama' => 'Teh Botol',
                'harga_beli' => 7000,
                'harga_jual' => 12000,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 5,
                'barang_kode' => 'B015',
                'barang_nama' => 'Set Panci Teflon',
                'harga_beli' => 400000,
                'harga_jual' => 600000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
