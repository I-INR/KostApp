<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aboutkost;
use App\Models\Fasilikost;
use App\Models\Footer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Aboutkost::all();
        return view('layouts.main',['kosts'=>$data]);
    }

    public function show($id)
    {
        $kost = Aboutkost::find($id);
        $fasilitas = Fasilikost::find($kost->idfasili);
        $footers = Footer::where('idkost',$kost->id)->get();
        // dd($fa);

        return view('layouts.kost',['data'=>$kost, 'fasilitas'=>$fasilitas,'footers'=>$footers]);
    }
}
