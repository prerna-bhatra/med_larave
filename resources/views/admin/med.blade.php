@extends('admin.layout')
@section('content')
	<div class="contanier">
		<h1>Add Medicine</h1>
		<form action="med" method="POST">
			@csrf
			<div class="row">
				<div class="col-md-6">
					<label>Medicine Name</label>
						<input type="text" name="name" class="form-control">
						<label>Price</label>
						<input type="number" name="price" class="form-control" placeholder="in rupees">
						<label>Stock</label>
						<input type="number" name="stock" class="form-control">
				</div>
			</div>
			<input type="submit" name="">
		</form>
	</div>
@endsection