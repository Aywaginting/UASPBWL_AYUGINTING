@extends('Layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Data Guest</h3>
        <form action="{{ url('/guest') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>NAMA TAMU</label>
                <input type="text" class="form-control" name="guestname">
            </div>
            <div class="mb-3">
                <label>ALAMAT TAMU</label>
                <input type="text" class="form-control" name="guestaddress">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN" class="btn btn-success">
                <a href="{{ url('guest/') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
</div>
@endsection