<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        return view('pages.facility.index');
    }

    public function show(Request $request){

        return view('pages.facility.show');
    }
}
