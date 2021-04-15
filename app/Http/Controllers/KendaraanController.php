<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kendaraan;

class KendaraanController extends Controller
{
    public function home()
    {
        $hasil = Kendaraan::all();
        return view('list-kendaraan', ['data' => $hasil]);
    }
    public function tambah(Request $req)
    {
        $data = new Kendaraan;
        $data->plat = $req->plat;
        $data->merk = $req->merk;
        $data->tipe = $req->tipe;
        $data->save();

        return $this->home();
    }

    public function hapus($req)
    {
        $data = Kendaraan::find($req);
        $data->delete();

        return $this->home();
    }

    public function formUbah($req)
    {
        $hasil = Kendaraan::find($req);
        return view('form-ubah-kendaraan', ['data' => $hasil]);
    }
    public function ubah(Request $req)
    {
        $data =  Kendaraan::find($req->id);
        $data->plat = $req->plat;
        $data->merk = $req->merk;
        $data->tipe = $req->tipe;
        $data->save();
        return $this->home();
    }
}
