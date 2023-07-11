<?php

namespace App\Http\Controllers\bykost;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Aboutkost;


class AboutkostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pegawai = Employee::with(['user'])->get();
        // return view('pegawai/index', compact('pegawai'));
        $iduser=Auth::user()->id;
        // $data = Aboutkost::with(['user'])->get();
        // return view('admin.profil',['title' =>'Profil Kost','data'=>$data]);
        $data = Aboutkost::where('iduser',$iduser)->first();
        return view('admin.profil',['title' =>'Profil Kost','data'=>$data]);
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
        // dd($request->file('mainP'));
        $data = Aboutkost::find($request->id);
        $data->update([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            // 'mainP' => $request ->mainP,
            // 'secondP' => $request->secondP,
            // 'roomP' => $request->roomP,
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
