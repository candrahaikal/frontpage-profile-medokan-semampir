<?php

namespace App\Http\Controllers;

use App\Models\MRt;
use App\Models\MRw;
use App\Models\FacilityRt;
use App\Models\FacilityRw;
use App\Models\Umkm;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $totalRw = MRw::count();
        $totalRt = MRt::whereHas('rw', function ($query) {
            $query->where('name', 'RW 7');
        })->count();
        
        $facilityRw = FacilityRw::whereHas('rw', function ($query) {
            $query->where('name', 'RW 7');
        })->count();

        $facilityRt = FacilityRt::whereHas('rt', function ($query) {
            $query->whereHas('rw', function ($query) {
                $query->where('name', 'RW 7');
            });
        })->count();

        $totalFacility = $facilityRt + $facilityRw;

        $totalUmkm = Umkm::whereHas('rt', function ($query) {
            $query->whereHas('rw', function ($query) {
                $query->where('name', 'RW 7');
            });
        })->count();

        $totalPopulation = MRt::whereHas('rw', function ($query) {
            $query->where('name', 'RW 7');
        })->sum('population');


        return view('pages.home', [
            'totalRt' => $totalRt,
            // 'totalKk' => $totalKk,
            'totalPopulation' => $totalPopulation,
            'totalFacility' => $totalFacility,
            'totalUmkm' => $totalUmkm
        ]);
    }
}
