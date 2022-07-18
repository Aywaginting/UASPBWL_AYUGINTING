@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Daftar Penjualan
    <a class="btn btn-primary btn-sm float-end" href="{{ url('penjualan/create') }}">
        Tambah Data</a>
    </h3>
    <br>
    <table class="table table-bordered table-hover border-dark text-center">
        <tr class="fw-bold table-active">
            <td>ID PELANGGAN</td>
            <td>TANGGAL TRANSAKSI</td>
            <td>TOTAL TRANSAKSI</td>
            <td>EDIT</td>
            <td>DELETE</td>
        </tr>
        @foreach($rows as $row)
        <tr class="fw-semibold">
            <td>{{ $row->pelanggan_id }}</td>
            <td>{{ $row->transaksi_tgl }}</td>
            <td>{{ $row->transaksi_total }}</td>
            <td><a href="{{ url('penjualan/' . $row->transaksi_id . '/edit') }}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{ url('penjualan/' . $row->transasksi_id) }}" method="POST">
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