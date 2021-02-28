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
            <a href="{{route('laravel-crud.create')}}" data-toggle="modal" data-target="#addModal" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i>Add New</a>
        </div>
        <div class="panel-body">
            <table class="table table-hover table-bordered table-stripped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th style="width:200px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->phone}}</td>
                            <td>
                                <form method="post" action="{{route('laravel-crud.destroy',$student->id)}}" class="delete_form">

                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="{{ route('laravel-crud.edit',$student->id) }}" class="btn btn-xs btn-primary">Edit</a>

                                    <a href="{{ route('laravel-crud.show',$student->id) }}" class="btn btn-xs btn-success">View</a>
                                    <button class="btn btn-xs btn-danger" type="submit" onclick="return confirm('Are You Sure? Want to Delete It.')"></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
