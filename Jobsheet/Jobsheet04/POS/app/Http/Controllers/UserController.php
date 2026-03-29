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

    // $user = UserModel::Create(
    //     [
    //         'username' => 'manager11',
    //     // ],
    //     // [
    //         'nama' => 'Manager11 ',
    //         'password' => Hash::make('12345'),
    //         'level_id' => 2
    //     ],
    // );
    // // $user->save();

    // // return view('user', ['data' => $user]);
    // $user->username = 'manager12e';

    // $user->save();

    // $user->wasChanged(); //true
    // $user->wasChanged('username'); //true
    // $user->wasChanged('nama'); //false
    // $user->wasChanged('nama', 'username'); //true
    // dd($user->wasChanged(['nama', 'username'])); //true

    $user = UserModel::all();
    return view('user', ['data' => $user]);
    }
    
    public function tambah()
    {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);
        return redirect('/user');
    }

    public function ubah($id)
    {
        $data = UserModel::find($id);
        return view('user_ubah', ['data' => $data]);
    }

    public function ubah_simpan(Request $request, $id)
    {
        UserModel::where('user_id', $id)->update([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);
        return redirect('/user');
    }

    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();
        return redirect('/user');
    }

}