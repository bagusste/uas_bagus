@extends('dashboard.main')
@section('content')
<div class="title mb-4 mt-3">
    <h3>Data Tambahan</h3>
</div>
<a class="btn btn-success mb-5" href="{{ url('/tambahan/create') }}"><span data-feather="plus-circle"></span> Tambah Data</a>

<form action="{{ url('/tambahan') }}" method="get" class="float-end">
    <div class="input-group w-100">
        <input type="text" class="form-control" placeholder="Cari" name="cari" value="{{ request('cari') }}">
        <button class="btn btn-secondary" type="submit"><span data-feather="search"></span></button>
    </div>
</form>

@if (session()->has('update'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session('update') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (session()->has('create'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('create') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (session()->has('destroy'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('destroy') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr class="align-middle text-center">
                <th>ID</th>
                <th class="text-start">Nama Tambahan</th>
                <th class="text-start">Harga</th>
                <th colspan="2">Aksi</th>
            </tr>
            @foreach ($data as $tambahan)
            <tr class="align-middle">
                <td class="text-center" style="width: 80px;">{{ $tambahan->id_tambahan }}</td>
                <td>{{ $tambahan->nama_tambahan }}</td>
                <td style="width: 400px;">Rp. {{ $tambahan->harga }}</td>
                <td class="text-center" style="width: 60px;">
                    <a href="{{ url('/') }}/tambahan/edit/{{ $tambahan->id_tambahan }}" class=" btn btn-primary">
                        <span data-feather="edit" alt=""></span>
                    </a>
                <td class="text-center" style="width: 60px;">
                    <a href="{{ url('/') }}/tambahan/delete/{{ $tambahan->id_tambahan }}" class=" btn btn-danger" onclick="return confirm('Ingin Menghapus Data Ini ?');">
                        <span data-feather="trash-2" alt=""></span>
                    </a>
                </td>
            </tr>
            @endforeach
        </thead>
    </table>
</div>
@endsection