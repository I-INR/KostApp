<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aboutkost;
use App\Models\Fasilikost;
use App\Models\Footer;


class DetailkostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kost = Aboutkost::all();
        return view('layouts.main', ['kosts' => $kost]);
    }

    public function kost()
    {
        return view('layouts.kost');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $datakost = Aboutkost::find($id);
        $datafasilitas = Fasilikost::find($datakost->idfasilitas);
        $datacontact = Footer::where('idkost',$datakost->id)->get();
        return view('layouts.kostdetail', ['datakost' => $datakost,'datafasilitas' => $datafasilitas,'datacontact' => $datacontact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
