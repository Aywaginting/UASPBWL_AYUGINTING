@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Daftar TAMU
    <a class="btn btn-primary btn-sm float-end" href="{{ url('guest/create') }}">
        Tambah Data</a>
    </h3>
    <br>
    <table class="table table-bordered table-hover border-dark text-center">
        <tr class="fw-bold table-active">
            <td>NAMA TAMU</td>
            <td>ALAMAT TAMU</td>
            <td>EDIT</td>
            <td>DELETE</td>
        </tr>
        @foreach($rows as $row)
        <tr class="fw-semibold">
            <td>{{ $row->guestname }}</td>
            <td>{{ $row->guestaddress }}</td>
            <td><a href="{{ url('guest/' . $row->guestno . '/edit') }}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{ url('guest/' . $row->guestno) }}" method="POST">
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