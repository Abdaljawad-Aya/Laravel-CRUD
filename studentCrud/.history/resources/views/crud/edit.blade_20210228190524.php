@extends('crud.main')

@section('main-content')
<div class="container">
    <div class="jumbotron">
       <h1>CRUD LARAVEL</h1>
          <p>Student Table</p>
    </div>
   <div class="panel panel-success">
        <div class="panel-heading">
            Edit Student
        </div>
<div class="panel-body">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('laravel-crud.update',$student->id)}}" method="post">

    </form>
</div>
      </div>
  </div>

  @endsection
