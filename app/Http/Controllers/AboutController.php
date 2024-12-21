<?php

namespace App\Http\Controllers;

use App\Models\StaffRt;
use App\Models\StaffRw;
use App\Models\MRt;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){

        $rts = Mrt::whereHas('rw', function ($query) {
            $query->where('name', 'RW 7');
        })->get();

        // dd($rts);

        // $staffRws = StaffRw::whereHas('rw', function ($query) {
        //     $query->where('name', '7');
        // })->join('m_staff_category', 'staff_rw.staff_category_id', '=', 'm_staff_category.id')
        // ->orderBy('m_staff_category.order', 'asc')
        // ->select('staff_rw.*') // Pastikan hanya kolom `staff_rw` yang dipilih
        // ->get();

        $staffRws = StaffRw::whereHas('rw', function ($query) {
            $query->where('name', 'RW 7');
        })->orderBy('staff_category_id', 'asc')->with('staffCategory')->get();

        // dd($staffRws);

        $staffRts = StaffRt::whereHas('rt', function ($query) {
            $query->whereHas('rw', function ($query) {
                $query->where('name', 'RW 7');
            });
        })->orderBy('staff_category_id', 'asc')->with('staffCategory')->get();

        // dd($staffRts);

        return view('pages.about', [
            'rts' => $rts,
            'staffRts' => $staffRts,
            'staffRws' => $staffRws
        ]);
    }
}
