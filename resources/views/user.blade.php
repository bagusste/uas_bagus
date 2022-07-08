@extends('dashboard.main')
@section('content')
<h2 class="mb-5 mt-4">Biodata</h2>
<table class="table table-success table-striped w-50">
    <tbody>
        <tr>
            <td width="100">Nama</td>
            <td width="30">:</td>
            <td>{{ Auth::user()->name }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ Auth::user()->email }}</td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td>{{ Auth::user()->password }}</td>
        </tr>
    </tbody>
</table>
@endsection