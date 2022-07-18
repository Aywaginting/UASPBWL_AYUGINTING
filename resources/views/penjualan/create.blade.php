@extends('Layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Data Penjualan</h3>
        <form action="{{ url('/penjualan') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>ID PELANGGAN</label>
                <input type="text" class="form-control" name="pelanggan_id">
            </div>
            <div class="mb-3">
                <label>TANGGAL TRANSAKSI</label>
                <input type="text" class="form-control" name="transaksi_tgl">
            </div>
            <div class="mb-3">
                <label>TOTAL TRANSAKSI</label>
                <input type="text" class="form-control" name="transaksi_total">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN" class="btn btn-success">
                <a href="{{ url('penjualan/') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
</div>
@endsection