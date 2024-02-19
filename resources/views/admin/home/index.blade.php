@extends('admin.layouts.app-main')

@section('content')
    <div class="bg-light p-5 rounded">
        <h1>Dashboard</h1>
        <p class="lead">Welcome to Dashboard.</p>
        <a class="btn btn-lg btn-primary" href="{{route('products.index')}}" role="button">Manage Products &raquo;</a>
    </div>
@endsection
