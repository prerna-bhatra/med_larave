@extends('admin.layout');
@section('content')
<div class="row">
	<form action="store_submit" method="POST">
		@csrf
		<div class="col-md-6">
			<label>Store Name</label>
			<input type="text" name="name" class="form-control">
			<label>Email</label>
			<input type="email" name="email" class="form-control">
			<label>Mobile</label>
			<input type="number" name="mob" class="form-control">
			<label>Address</label>
			<textarea name="add" class="form-control"></textarea>
		</div>
	</div>
		<input type="submit" name="submit" value="save">
	</form>
	@error('name')
	<div>{{$message}}</div>
	@enderror
	@error('email')
	<div>
		{{$message}}
	</div>
	@enderror
@endsection