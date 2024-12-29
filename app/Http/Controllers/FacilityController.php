<?php

namespace App\Http\Controllers;

use App\Models\FacilityRt;
use App\Models\MRw;
use App\Models\FacilityRw;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        // Ambil data fasilitas RW dan RT dengan kondisi RW 7
        $facilityRw = FacilityRw::whereHas('rw', function ($query) {
            $query->where('name', 'RW 7');
        })->get();

        $facilityRt = FacilityRt::whereHas('rt', function ($query) {
            $query->whereHas('rw', function ($query) {
                $query->where('name', 'RW 7');
            });
        })->get();

        // // Proses URL Google Maps agar menjadi embed URL
        // $facilityRw->transform(function ($facility) {
        //     $facility->link_maps = $this->convertToEmbedUrl($facility->link_maps);
        //     return $facility;
        // });

        // dd($facilityRw);

        // $facilityRt->transform(function ($facility) {
        //     $facility->link_maps = $this->convertToEmbedUrl($facility->link_maps);
        //     return $facility;
        // });

        // Kirim data ke view
        return view('pages.facility.index', [
            'facilityRws' => $facilityRw,
            'facilityRts' => $facilityRt
        ]);
    }

    public function show(Request $request)
    {
        $type = $request->type;
        $id = $request->id;

        if ($type == 'rw') {
            // Ambil data FacilityRw berdasarkan ID
            $facility = FacilityRw::where('id', $id)->first();

            // Pastikan data ditemukan sebelum memodifikasi
            if ($facility) {
                $facility->link_maps = $this->convertToEmbedUrl($facility->link_maps);
            }
        } else {
            // Ambil data FacilityRt berdasarkan ID
            $facility = FacilityRt::where('id', $id)->first();

            // Pastikan data ditemukan sebelum memodifikasi
            if ($facility) {
                $facility->link_maps = $this->convertToEmbedUrl($facility->link_maps);
            }
        }

        // dd($facility);

        return view('pages.facility.show', [
            'type' => $type,
            'facility' => $facility
        ]);
    }


    function convertToEmbedUrl($shortUrl)
{
    // Jika URL adalah short URL, ekspansi ke URL panjang
    if (strpos($shortUrl, 'goo.gl') !== false || strpos($shortUrl, 'maps.app.goo.gl') !== false) {
        $longUrl = $this->expandShortUrl($shortUrl);
    } else {
        $longUrl = $shortUrl;
    }

    dd($longUrl);

    // Debug URL panjang setelah ekspansi
    error_log("Expanded URL: " . $longUrl);

    // Ekstrak koordinat dari URL panjang menggunakan regex
    preg_match('/@(-?\d+\.\d+),(-?\d+\.\d+)/', $longUrl, $matches);

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


     function expandShortUrl($shortUrl)
{
    $ch = curl_init($shortUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Ikuti redirect
    curl_setopt($ch, CURLOPT_HEADER, false);
    
    // Eksekusi cURL dan dapatkan URL yang sudah diperluas
    curl_exec($ch); 
    $expandedUrl = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
    curl_close($ch);

    dd($expandedUrl);

    return $expandedUrl;
}





    // // Contoh penggunaan
    // $shortLink = "https://maps.app.goo.gl/sEYRWYqCLckyPCAS6";
    // $embedUrl = convertShortLinkToEmbed($shortLink);
    // echo $embedUrl;

}
