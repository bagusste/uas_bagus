<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\Tambahan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = DB::table('members')
            ->join('tambahans', 'tambahans.id_tambahan', '=', 'members.tambahan')
            ->orderBy('id_member', 'ASC');


        if (request('cari')) {
            $member->where('nama_member', 'like', '%' . request('cari') . '%')
                ->orWhere('nama_tambahan', 'like', '%' . request('cari') . '%');
        }

        $data = $member->get();
        return view('members.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tambahan = Tambahan::orderBy('nama_tambahan', 'ASC')->get();
        return view('members.create', compact('tambahan'));
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
            'nama_member' => 'string|min:2|max:150',
            'tambahan' => 'string',
        ]);

        Members::create($validatedData);
        return redirect('/members')->with('create', 'Member Berhasil Ditambah!');
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
        $data = DB::table('members')
            ->join('tambahans', 'tambahans.id_tambahan', '=', 'members.tambahan')
            ->where('id_member', $id)
            ->get();
        $tambahan = Tambahan::orderBy('nama_tambahan', 'ASC')->get();
        return view('members.edit', compact('data', 'tambahan'));
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
            'nama_member' => 'string|min:2|max:150',
            'tambahan' => 'string',
        ]);

        $member = Members::find($id);
        $member->nama_member = $request->input('nama_member');
        $member->tambahan = $request->input('tambahan');
        $member->update();

        return redirect('/members')->with('update', 'Member Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Members::find($id);
        $member->delete();

        return redirect('/members')->with('destroy', 'Member Telah Diselesikan!');
    }
}
