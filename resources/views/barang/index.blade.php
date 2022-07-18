@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Daftar Data Room
    <a class="btn btn-primary btn-sm float-end" href="{{ url('room/create') }}">
        Tambah Data</a>
    </h3>
    <br>
    <table class="table table-bordered table-hover border-dark text-center">
        <tr class="fw-bold table-active">
            <td>NOMOR HOTEL</td>
            <td>TIPE</td>
            <td>HARGA</td>
            <td>EDIT</td>
            <td>DELETE</td>
        </tr>
        @foreach($rows as $row)
        <tr class="fw-semibold">
            <td>{{ $row->hotelno }}</td>
            <td>{{ $row->type }}</td>
            <td>{{ $row->price }}</td>
            <td><a href="{{ url('room/' . $row->roomno . '/edit') }}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{ url('barang/' . $row->roomno) }}" method="POST">
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