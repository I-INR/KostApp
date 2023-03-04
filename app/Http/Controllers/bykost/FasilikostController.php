<?php

namespace App\Http\Controllers\bykost;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Aboutkost;
use App\Models\Fasilikost;

class FasilikostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iduser = Auth::user()->id;
        $idkost = Aboutkost::where('iduser', $iduser)->first()->idfasili;
        $data = Fasilikost::find($idkost);
        return view('admin.fasilitas', [
            'title' => 'Fasilitas Kost',
            'data' => $data,
        ]);
        // return view('admin.fasilitas');
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
        //
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
    public function update(Request $request)
    {
        // dd($request);
        $data = Fasilikost::find($request->id);
        $data->update([
            'icebox' => $request->icebox == 'on' ? 1 : 0,
            'wifi' => $request->wifi == 'on' ? 1 : 0,
            'kitchen' => $request->kitchen == 'on' ? 1 : 0,
            'bathroom' => $request->bathroom == 'on' ? 1 : 0,
            'mattress' => $request->mattress == 'on' ? 1 : 0,
            'cupboard' => $request->cupboard == 'on' ? 1 : 0,
        ]);
        $data->save();

        return redirect()->back();
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
