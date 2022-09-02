<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Foto;
use App\Models\Lokasi;
use App\Models\Pemandu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        return response()->json('ok');
    }

    public function carilokasi()
    {
        $data = DB::table('destinasis')
            ->join('lokasis', 'destinasis.id', '=', 'lokasis.id_destinasi')->get();
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function caridestinasi()
    {
        $data = Destinasi::orderBy('nama')->get();

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function caripemandu()
    {
        $data = Pemandu::orderBy('nama')->get();

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function carifoto()
    {
        $data = Foto::orderBy('foto')->get();

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    // store

    public function storedestinasi(Request $request)
    {
        $data = Destinasi::create([
            'map' => 'map',
            'nama' => $request->nama,
            'harga' => $request->harga,
            'link_detail' => $request->link_detail,
            'detail' => $request->detail,
            'id_foto' => 1,
        ]);

        if ($data) {

            return response()->json([
                'success' => true,
                'data' => $data
            ]);
        }
        return response()->json([
            'success' => false,
        ]);
    }

    public function storelokasi(Request $request)
    {
        $data = Lokasi::create([
            'alamat' => $request->alamat,
            'jalan' => $request->jalan,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
            'lat' => $request->lat,
            'long' => $request->long,
            'id_destinasi' => $request->id_destinasi,
        ]);

        if ($data) {

            return response()->json([
                'success' => true,
                'data' => $data
            ]);
        }
        return response()->json([
            'success' => false,
        ]);
    }

    public function storepemandu(Request $request)
    {
        $data = Pemandu::create([
            'no_lisensi' => $request->no_lisensi,
            'no_ktan' => $request->no_ktan,
            'nama' => $request->nama,
            'bahasa' => $request->bahasa,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
            'pendidikan' => $request->pendidikan,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'sertifikasi' => $request->sertifikasi,
        ]);

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function storefoto(Request $request)
    {
        $data = Foto::create([
            'foto' => $request->foto,
        ]);
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function showdestinasi($id)
    {
        $destinasi = Destinasi::where('id', $id)->first();
        $lokasi = Lokasi::where('id_destinasi', $destinasi->id);

        return response()->json([
            'success' => true,
            'destinasi' => $destinasi,
            'lokasi' => $lokasi
        ]);
    }
}
