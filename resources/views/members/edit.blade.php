@extends('dashboard.main')
@section('content')
<h3 class="mt-4 mb-4">Edit Member</h3>
@foreach ($data as $member)
<form method="post" action="{{ url('/members/update') }}/{{ $member->id_member }}">
    @csrf
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Nama Member</label>
        <div class="col-sm-10 w-25 p-0">
            <input type="text" class="form-control" placeholder="Nama Member" name="nama_member" value="{{ $member->nama_member }}" required>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Tambahan</label>
        <div class="col-sm-10 w-25 p-0">
            <select class="form-select" aria-label="Default select example" name="tambahan">
                <option value="{{ $member->tambahan }}">{{ $member->nama_tambahan }}</option>
                @foreach ($tambahan as $row)
                <option value="{{ $row->id_tambahan }}">{{ $row->nama_tambahan }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <a class="btn btn-secondary" href="{{ url('/members') }}">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endforeach
@endsection