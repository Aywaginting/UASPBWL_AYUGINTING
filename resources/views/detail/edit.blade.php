@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Detail Penjualan</h3>
        <form action="{{ url('/detail/' . $row->transaksi_detail_id) }}" method="POST">
            @method('PATCH')
            @csrf
                <div class="mb-3">
                    <label>ID TRANSAKSI</label>
                    <input type="text" class="form-control" name="transaksi_id" value="{{ $row->transaksi_id }}"></>
                </div>
                <div class="mb-3">
                    <label>ID BARANG</label>
                    <input type="text" class="form-control" name="barang_id" value="{{ $row->barang_id }}"></>
                </div>
                <div class="mb-3">
                    <label>JUMLAH BARANG</label>
                    <input type="text" class="form-control" name="barang_jml" value="{{ $row->barang_jml }}"></>
                </div>
                <div class="mb-3">
                    <input type="submit" value="UPDATE" class="btn btn-success">
                    <a href="{{ url('detail/') }}" class="btn btn-secondary">Kembali</a>
                </div>
        </form>
    </div>
@endsection