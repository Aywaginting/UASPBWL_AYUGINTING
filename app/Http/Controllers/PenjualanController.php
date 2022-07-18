<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Penjualan::all();
        return view('penjualan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penjualan.create');
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
            'pelanggan_id' => 'bail|required|unique:tb_penjualan',
            'transaksi_tgl' => 'required'
            ],
            [
                'pelanggan_id.required' => 'ID Pelanggan wajib diisi',
                'pelanggan_id.unique' => 'ID Pelanggan sudah ada',
                'transaksi_tgl.required' => 'Tanggal wajib diisi'
            ]);

            Penjualan::create([
                'pelanggan_id' => $request->pelanggan_id,
                'transaksi_tgl' => $request->transaksi_tgl,
                'transaksi_total' => $request->transaksi_total
                ]);
                
                return redirect('penjualan');
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
        $row = Penjualan::findOrFail($id);
        return view('penjualan.edit', compact('row'));
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
            'pelanggan_id' => 'bail|required',
            'transaksi_tgl' => 'required'
            ],
            [
            'pelanggan_id.required' => 'ID Pelanggan wajib diisi',
            'transaksi_tgl.required' => 'Tanggal Transaksi wajib diisi'
            ]
            );

            $row = Pelanggan::findOrFail($id);
            $row->update([
            'pelanggan_id' => $request->pelanggan_id,
            'transaksi_tgl' => $request->transaksi_tgl,
            'transaksi_total' => $request->transaksi_total
            ]);

            return redirect('penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Penjualan::findOrFail($id);
        $row->delete();

        return redirect('penjualan');
    }
}
