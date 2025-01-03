<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UmkmController extends Controller
{
    public function index()
    {

        // Tentukan jumlah data per halaman
        $perPage = 6;

        // Ambil data fasilitas RW dan RT dengan kondisi RW 7, dan tambahkan pagination
        $umkms = Umkm::whereHas('rt', function ($query) {
            $query->whereHas('rw', function ($query) {
                $query->where('name', 'RW 7');
            });
        })->paginate($perPage, ['*'], 'umkmPage');

        return view('pages.umkm.index', [
            'umkms' => $umkms
        ]);
    }

    public function show(Request $request)
    {


        $id = $request->id;
        $umkm = Umkm::where('id', $id)->first();

        // Pastikan data ditemukan sebelum memodifikasi
        if ($umkm) {
            $redirectedUrl = $this->getRedirectedUrl($umkm->link_maps);
            $umkm->link_maps = $this->convertToEmbedUrl($redirectedUrl);
        }

        return view('pages.umkm.show', [
            'umkm' => $umkm
        ]);
    }

    public function getRedirectedUrl($url)
    {
        // Mengirim permintaan GET ke URL untuk mendapatkan URL redirect
        try {
            $response = Http::withOptions(['allow_redirects' => ['max' => 10]])->get($url);

            // Mendapatkan URL akhir setelah redirect
            $finalUrl = $response->effectiveUri();
        } catch (\Exception $e) {
            return "Error: " . $e->getMessage();
        }

        return $finalUrl->getPath();
    }

    function convertToEmbedUrl($longUrl)
    {
        // Debug URL panjang setelah redirect
        error_log("Expanded URL: " . $longUrl);

        // Ekstrak koordinat dari URL panjang menggunakan regex
        // Tangkap pola '3d-latitude' dan '4d-longitude' dari URL
        preg_match('/3d(-?\d+\.\d+).*4d(-?\d+\.\d+)/', $longUrl, $matches);

        // Jika koordinat ditemukan
        if (isset($matches[1]) && isset($matches[2])) {
            $latitude = $matches[1];
            $longitude = $matches[2];

            // Membuat URL iframe untuk embed Google Maps
            return "https://www.google.com/maps/embed/v1/place?key=" . env('GOOGLE_MAPS_API_KEY') . "&q=$latitude,$longitude";
        }

        // Fallback jika koordinat tidak ditemukan
        return "Error: Unable to extract coordinates.";
    }
}
