<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Foto;
use App\Models\Lokasi;
use App\Models\Pemandu;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return response()->json('ok');
    }

    public function carilokasi()
    {
        $data = Lokasi::orderBy('kota')->get();

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
}
