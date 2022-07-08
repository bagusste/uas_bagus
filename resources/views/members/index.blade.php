@extends('dashboard.main')
@section('content')
<div class="title mb-4 mt-3">
    <h3>Data Members</h3>
</div>
<a class="btn btn-success mb-5" href="{{ url('/members/create') }}"><span data-feather="user-plus"></span>Tambah Members</a>

<form action=" {{url('/members') }}" method="get" class="float-end">
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
                <th class="text-start">Nama Member</th>
                <th class="text-start">Tambahan</th>
                <th colspan="2">Aksi</th>
            </tr>
            @foreach ($data as $row)
            <tr class="align-middle">
                <td class="text-center" style="width: 80px;">{{ $row->id_member }}</td>
                <td>{{ $row->nama_member }}</td>
                <td style="width: 400px;">{{ $row->nama_tambahan }}</td>
                <td class="text-center" style="width: 60px;">
                    <a href="{{ url('/') }}/members/edit/{{ $row->id_member }}" class=" btn btn-primary">
                        <span data-feather="edit" alt=""></span>
                    </a>
                <td class="text-center" style="width: 60px;">
                    <a href="{{ url('/') }}/members/delete/{{ $row->id_member }}" class=" btn btn-danger" onclick="return confirm('Ingin Menyelesaikan Member Ini ?');">
                        <span data-feather="x-circle" alt=""></span>
                    </a>
                </td>
            </tr>
            @endforeach
        </thead>
    </table>
</div>
@endsection