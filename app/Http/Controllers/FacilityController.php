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
        $facilityRw = FacilityRw::whereHas('rw', function ($query) {
            $query->where('name', 'RW 7');
        })->get();

        $facilityRt = FacilityRt::whereHas('rt', function ($query) {
            $query->whereHas('rw', function ($query) {
                $query->where('name', 'RW 7');
            });
        })->get();

        // dd($facilityRt);

        return view('pages.facility.index', [
            'facilityRws' => $facilityRw,
            'facilityRts' => $facilityRt
        ]);
    }

    public function show(Request $request){

        $type = $request->type;
        $id = $request->id;
        
        if($type == 'rw'){
            $facility = FacilityRw::where('id', $id)->first();
        }else{
            $facility = FacilityRt::where('id', $id)->first();
        }
       

        return view('pages.facility.show', [
            'type' => $type,
            'facility' => $facility
        ]);
    }
}
