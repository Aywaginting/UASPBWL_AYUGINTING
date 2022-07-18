<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Hotel::all();
        return view('hotel.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotel.create');
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
            'hotelname' => 'bail|required|unique:tb_hotel',
            'city' => 'required'
            ],
            [
                'hotelname.required' => 'Nama Hotel wajib diisi',
                'hotelname.unique' => 'Nama Hotel sudah ada',
                'city.required' => 'City wajib diisi'
            ]);

            Detail::create([
                'hotelname' => $request->hotelname,
                'city' => $request->city
                ]);
                
                return redirect('hotel');
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
        $row = Detail::findOrFail($id);
        return view('hotel.edit', compact('row'));
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
            'hotelname' => 'bail|required',
            'city' => 'required'
            ],
            [
            'hotelname.required' => 'Nama Hotel wajib diisi',
            'city.required' => 'City wajib diisi'
            ]
            );

            $row = Pelanggan::findOrFail($id);
            $row->update([
            'hotelname' => $request->hotelname,
            'city' => $request->city
            ]);

            return redirect('hotel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Hotel::findOrFail($id);
        $row->delete();

        return redirect('hotel');
    }
}
