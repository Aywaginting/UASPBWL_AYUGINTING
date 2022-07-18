<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Guest::all();
        return view('guest.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'guestname' => 'bail|required|unique:tb_guest',
            'guestaddress' => 'required'
            ],
            [
                'guestname.required' => 'Nama Tamu wajib diisi',
                'guestname.unique' => 'Nama Tamu sudah ada',
                'guestaddress.required' => 'Alamat wajib diisi'
            ]);

            Guest::create([
                'guestname' => $request->guestname,
                'guestaddress' => $request->guestaddress
                ]);
                
                return redirect('guest');
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
        $row = Guest::findOrFail($id);
        return view('guest.edit', compact('row'));
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
        $request->validate(
            [
            'guestname' => 'bail|required',
            'guestaddress' => 'required'
            ],
            [
            'guestname.required' => 'Nama Tamu wajib diisi',
            'guestaddress.required' => 'Alamat Tamu wajib diisi'
            ]
            );

            $row = Guest::findOrFail($id);
            $row->update([
            'guestname' => $request->guestname,
            'guestaddress' => $request->guestaddress
            ]);

            return redirect('guest');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Guest::findOrFail($id);
        $row->delete();

        return redirect('guest');
    }
}
