@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Daftar Detail Penjualan
    <a class="btn btn-primary btn-sm float-end" href="{{ url('detail/create') }}">
        Tambah Data</a>
    </h3>
    <br>
    <table class="table table-bordered table-hover border-dark text-center">
        <tr class="fw-bold table-active">
            <td>ID TRANSAKSI</td>
            <td>ID BARANG</td>
            <td>JUMLAH BARANG</td>
            <td>EDIT</td>
            <td>DELETE</td>
        </tr>
        @foreach($rows as $row)
        <tr class="fw-semibold">
            <td>{{ $row->transaksi_id }}</td>
            <td>{{ $row->barang_id }}</td>
            <td>{{ $row->barang_jml }}</td>
            <td><a href="{{ url('detail/' . $row->transaksi_detail_id . '/edit') }}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{ url('detail/' . $row->transaksi_detail_id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection