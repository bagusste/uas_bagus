@extends('dashboard.main')
@section('content')
<h3 class="mt-4 mb-4">Tambah Data</h3>
<form method="post" action="{{ url('/tambahan/store') }}">
    @csrf
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Nama Tambahan</label>
        <div class="col-sm-10 w-25 p-0">
            <input type="text" class="form-control" placeholder="Nama Tambahan" name="nama_tambahan" required>
        </div>
    </div>
    <div class="input-group mb-3">
        <label class="col-sm-2 col-form-label">Harga</label>
        <div class="input-group w-25">
            <span class="input-group-text" id="basic-addon1">Rp.</span>
            <input type="text" class="form-control" placeholder="0" name="harga" required>
        </div>

    </div>
    <a class="btn btn-secondary" href="{{ url('/tambahan') }}">Batal</a>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
@endsection