@extends('crud.main')
@section('main-content')

<div class="container">
    <div class="jumbotron">
        <h1>CRUD LARAVEL</h1>
        <p>Student Table</p>
    </div>

    @if (Session::has('message'))
        <p class="alert alert-success">{{Session::get('message')}}</p>
    @endif
</div>

@endsection
