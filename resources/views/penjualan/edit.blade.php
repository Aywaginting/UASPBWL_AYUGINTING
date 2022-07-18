@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Penjualan</h3>
        <form action="{{ url('/penjualan/' . $row->penjualan_id) }}" method="POST">
            @method('PATCH')
            @csrf
                <div class="mb-3">
                    <label>ID PELANGGAN</label>
                    <input type="text" class="form-control" name="pelanggan_id" value="{{ $row->pelanggan_id }}"></>
                </div>
                <div class="mb-3">
                    <label>TANGGAL TRANSAKSI</label>
                    <input type="text" class="form-control" name="transaksi_tgl" value="{{ $row->transaksi_tgl }}"></>
                </div>
                <div class="mb-3">
                    <label>TOTAL TRANSAKSI</label>
                    <input type="text" class="form-control" name="transaksi_total" value="{{ $row->transaksi_total }}"></>
                </div>
                <div class="mb-3">
                    <input type="submit" value="UPDATE" class="btn btn-success">
                    <a href="{{ url('penjualan/') }}" class="btn btn-secondary">Kembali</a>
                </div>
        </form>
    </div>
@endsection