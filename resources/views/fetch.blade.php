@foreach($seachbyphone as  $data) 
	<ul>
	<li>
		<p>{{$data->name}}</p>
		<p>Price-:{{$data->price}}RS</p>
		<h6>
		<a href="#"><b>Order Now</b></a>
	</h6>
	</li>	
	</ul> 
                 
@endforeach
<?php

//echo $seachbyphone;
?>