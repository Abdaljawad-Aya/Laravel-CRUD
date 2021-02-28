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
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="{{route('laravel-simple-crud.create')}}" data-toggle="modal" data-target="#addModal" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i>Add New</a>
        </div>
    </div>
</div>

@endsection
