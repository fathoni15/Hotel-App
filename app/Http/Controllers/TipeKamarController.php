<?php

namespace App\Http\Controllers;

use App\Models\FasilitasKamar;
use App\Models\TipeKamar;
use Illuminate\Http\Request;

class TipeKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TipeKamar::all();
        return view('admin.tipekamar.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fasilitas = FasilitasKamar::all();
        $data = TipeKamar::all();
        return view('admin.tipekamar.add', compact('data', 'fasilitas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['id_fasilitas'] = implode(",", $request['id_fasilitas']);

        $imgname = $request->foto->getClientOriginalName();
        $request->foto->move(public_path('images'), $imgname);

        TipeKamar::create([
            'name' => $request->name,
            'id_fasilitas' => $request->id_fasilitas,
            'info' => $request->info,
            'harga' => $request->harga,
            'foto' => $imgname,
        ]);

        return redirect()->route('tipeKamar.index');
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
        $edit = TipeKamar::find($id);
        $fasilitas = FasilitasKamar::all();
        $edit->id_fasilitas = explode(", ",$edit->id_fasilitas);

        return view('admin.tipeKamar.edit', compact('edit','fasilitas'));
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
        $data = TipeKamar::find($id);

        if($request['id_fasilitas'] != NULL){
            $request['id_fasilitas'] = implode(",", $request['id_fasilitas']);
        }else{
            $data->id_fasilitas;
        }
        if($data->foto != NULL){
            $imgname = $request->foto->getClientOriginalName();
            $request->foto->move(public_path('images'), $imgname);
        }else{
            $data = TipeKamar::find($id);
            $imgname = $data->foto;
        }

        $data->update([
            'name'=>$request->name,
            'id_fasilitas'=>$request->id_fasilitas,
            'info'=>$request->info,
            'harga'=>$request->harga,
            'foto'=>$imgname,
        ]);

        return redirect()->route('tipeKamar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TipeKamar::destroy($id);
        return redirect()->back();
    }
}
