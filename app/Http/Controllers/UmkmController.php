<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index(){

        $umkms = Umkm::whereHas('rt', function ($query) {
            $query->whereHas('rw', function ($query) {
                $query->where('name', 'RW 7');
            });
        })->get();

        return view('pages.umkm.index', [
            'umkms' => $umkms
        ]);
    }

    public function show(Request $request){

        $id = $request->id;
        $umkm = Umkm::where('id', $id)->first();

        return view('pages.umkm.show', [
            'umkm' => $umkm
        ]);
    }
}
