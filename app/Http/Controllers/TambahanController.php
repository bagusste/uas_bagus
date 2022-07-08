<?php

namespace App\Http\Controllers;

use App\Models\Tambahan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TambahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tambahan = Tambahan::orderBy('id_tambahan', 'ASC');

        if (request('cari')) {
            $tambahan->where('nama_tambahan', 'like', '%' . request('cari') . '%')
                ->orWhere('harga', 'like', '%' . request('cari') . '%');;
        }
        $data = $tambahan->get();
        return view('tambahan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_tambahan' => 'string|max:100',
            'harga' => 'numeric',
        ]);

        Tambahan::create($validatedData);
        return redirect('/tambahan')->with('create', 'Data Berhasil Ditambah!');
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
        $data = Tambahan::find($id);
        return view('tambahan.edit', compact('data'));
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
        $request->validate([
            'nama_tambahan' => 'string|max:100',
            'harga' => 'numeric',
        ]);

        $tambahan = Tambahan::find($id);
        $tambahan->nama_tambahan = $request->input('nama_tambahan');
        $tambahan->harga = $request->input('harga');
        $tambahan->update();

        return redirect('/tambahan')->with('update', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tambahan = Tambahan::find($id);
        $tambahan->delete();

        return redirect('/tambahan')->with('destroy', 'Data Berhasil Dihapus!');
    }
}
