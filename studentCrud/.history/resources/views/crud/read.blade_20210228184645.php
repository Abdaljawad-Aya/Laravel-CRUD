@extends('crud.main')

@section('main-content')

   <div class="container">
  <div class="jumbotron">
     <h1>CRUD LARAVEL</h1>
        <p>Student Table</p>
  </div>
 <div class="panel panel-success">
      <div class="panel-heading">
      	View Student Details
      </div>
      <div class="panel-body">
			  <div class="row">

			  	<div class="col-md-8">
			  	<div class="form-group">
				    <label for="roll">Student Name</label>
				    <input type="text" disabled value="{{ $student->name }}" class="form-control" placeholder="Student Name" name="name" id="name">
				 </div>
			  	</div>

			  	<div class="col-md-6">
			  	<div class="form-group">
				    <label for="phone">Phone</label>
				    <input type="text" disabled value="{{ $student->phone }}" class="form-control" placeholder="Phone" name="phone" id="phone">
				 </div>
			  	</div>

			  </div>
			  <a href="{{ route('laravel-crud.index') }}" class="btn btn-danger">Back</a>
   	  </div>
    </div>
</div>

@endsection
