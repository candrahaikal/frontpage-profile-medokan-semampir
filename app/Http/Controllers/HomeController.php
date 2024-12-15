<?php

namespace App\Http\Controllers;

use App\Models\MRt;
use App\Models\MRw;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $totalRw = MRw::count();
        $totalRt = MRt::count();
        $totalKk = MRt::sum('kk');
        $totalPopulation = MRt::sum('population');


        return view('pages.home', [
            'totalRw' => $totalRw,
            'totalRt' => $totalRt,
            'totalKk' => $totalKk,
            'totalPopulation' => $totalPopulation
        ]);
    }
}
