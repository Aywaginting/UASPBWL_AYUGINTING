@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Guest</h3>
        <form action="{{ url('/guest/' . $row->guestno) }}" method="POST">
            @method('PATCH')
            @csrf
                <div class="mb-3">
                    <label>NAMA TAMU</label>
                    <input type="text" class="form-control" name="guestname" value="{{ $row->guestname }}"></>
                </div>
                <div class="mb-3">
                    <label>ALAMAT TAMU</label>
                    <input type="text" class="form-control" name="guestaddress" value="{{ $row->guestaddress }}"></>
                </div>
                <div class="mb-3">
                    <input type="submit" value="UPDATE" class="btn btn-success">
                    <a href="{{ url('guest/') }}" class="btn btn-secondary">Kembali</a>
                </div>
        </form>
    </div>
@endsection