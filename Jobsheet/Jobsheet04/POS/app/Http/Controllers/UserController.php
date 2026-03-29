<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
    //coba akses model UserModel    
    // $data = [
    //     'username' => 'customer-1',
    //     'nama' => 'Pelanggan',
    //     'password' => Hash::make('12345'),
    //     'level_id' => 3
    // ];
    // UserModel::insert($data);

    
    // // tambah data user dengan Eloquent Model
    // $data = [
    //     'nama' => 'Pelanggan Pertama',
    //     ];
    //     UserModel::where('username', 'customer-1')->update($data);  

    // $data = [
    //     'level_id' => 2,
    //     'username' => 'manager_tiga',
    //     'nama' => 'Manager Tiga',
    //     'password' => Hash::make('12345')
    // ]; 
    // UserModel::create($data); // menambahkan data baru ke tabel m_user menggunakan Eloquent Model 
    // $user = UserModel::all(); // ambil semua data dari tabel m_user
    // return view('user', ['data' => $user]);

    // $user = UserModel::firstwhere('level_id', 1)(); // ambil data pertama dengan level_id 1
    // return view('user', ['data' => $user]);

    // $user = UserModel::where('level_id', 1)->get();
    // return view('user', ['data' => $user]);

    $user = UserModel::firstOrNew(
        [
            'username' => 'manager33',
        ],
        [
            'nama' => 'Manager Tiga Tiga',
            'password' => Hash::make('12345'),
            'level_id' => 2
        ],
    );
    $user->save();

    return view('user', ['data' => $user]);
    }
}