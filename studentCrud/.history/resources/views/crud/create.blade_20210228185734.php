@extends('crud.main')

@section('main-content')

   <div class="container">
  <div class="jumbotron">
    <h1>CRUD LARAVEL</h1>
        <p>Student Table</p>
  </div>
 <div class="panel panel-success">
      <div class="panel-heading">
      	Create New Student
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
	 	 <form action="{{ route('laravel-crud.store') }}" method="post">
	 	 	{{ csrf_field() }}
			  <div class="row">

			  	<div class="col-md-8">
			  	<div class="form-group">
				    <label for="roll">Student Name <span class="required">*</span></label>
				    <input type="text" class="form-control" placeholder="Student Name" name="name" id="name">
				 </div>
			  	</div>

			  	<div class="col-md-6">
			  	<div class="form-group">
				    <label for="phone">Phone</label>
				    <input type="text" class="form-control" placeholder="Phone" name="phone" id="phone">
				 </div>
			  	</div>

			  </div>
			  <button type="submit" class="btn btn-primary">Add</button>
			  <a href="{{ route('laravel-crud.index') }}" class="btn btn-danger">Back</a>
			</form>
   	  </div>
    </div>
</div>

@endsection
