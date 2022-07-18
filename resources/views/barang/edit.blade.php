@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Room</h3>
        <form action="{{ url('/room/' . $row->roomno) }}" method="POST">
            @method('PATCH')
            @csrf
                <div class="mb-3">
                    <label>NOMOR HOTEL</label>
                    <input type="text" class="form-control" name="hotelno" value="{{ $row->hotelno }}"></>
                </div>
                <div class="mb-3">
                    <label>TIPE</label>
                    <input type="text" class="form-control" name="tipe" value="{{ $row->tipe }}"></>
                </div>
                <div class="mb-3">
                    <label>HARGA</label>
                    <input type="text" class="form-control" name="" value="{{ $row->price }}"></>
                </div>
                <div class="mb-3">
                    <input type="submit" value="UPDATE" class="btn btn-success">
                    <a href="{{ url('room/') }}" class="btn btn-secondary">Kembali</a>
                </div>
        </form>
    </div>
@endsection