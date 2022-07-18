@extends('Layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Data Room</h3>
        <form action="{{ url('/room') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>NOMOR HOTEL</label>
                <input type="text" class="form-control" name="hotelno">
            </div>
            <div class="mb-3">
                <label>TIPE</label>
                <input type="text" class="form-control" name="tipe">
            </div>
            <div class="mb-3">
                <label>HARGA</label>
                <input type="text" class="form-control" name="harga">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN" class="btn btn-success">
                <a href="{{ url('room/') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
</div>
@endsection