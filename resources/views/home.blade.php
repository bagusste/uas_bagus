@extends('dashboard.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Selamat Datang</h1>
</div>
<h4>Hi, {{ Auth::user()->name }}</h4>
@endsection