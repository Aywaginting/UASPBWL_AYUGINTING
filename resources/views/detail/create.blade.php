@extends('Layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Data Detail Penjualan</h3>
        <form action="{{ url('/detail') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>ID TRANSAKSI</label>
                <input type="text" class="form-control" name="transaksi_id">
            </div>
            <div class="mb-3">
                <label>ID BARANG</label>
                <input type="text" class="form-control" name="barang_id">
            </div>
            <div class="mb-3">
                <label>JUMLAH BARANG</label>
                <input type="text" class="form-control" name="barang_jml">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN" class="btn btn-success">
                <a href="{{ url('detail/') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
</div>
@endsection