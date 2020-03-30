@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		@foreach($doc1 as  $data) 
			<div class="col-md-5" id="doc">
				<p>{{$data->name}}</p>
				<p>Fees-:{{$data->fees}}</p>
				<p>Profession-:{{$data->profession}}RS</p>
				<h6>
				<a href="#" class="btn btn-info"><b>Appointement</b></a>
				</h6>
			</div>	
	
                 
@endforeach
	</div>
</div>
	
@endsection