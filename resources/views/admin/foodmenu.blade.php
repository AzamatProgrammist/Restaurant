<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  
 @include("admin.admincss")
  </head>
  <body>
    
    <div class="container-scroller">
  	@include("admin.navbar")
<style type="text/css">
	.form{
		width: 50%;
		margin: auto;
	}
	.form input{
		display: block;
		width: 100%;
		margin-bottom: 20px;
	}
</style>
  	<div style="width: 70%; margin: auto; color: black;">
  		<form class="form" action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">
<base href="/public">
  			@csrf

  			<div>
  				<label>Title</label>
  				<input type="text" name="title" required>
  			</div>
  			<div>
  				<label>Price</label>
  				<input type="number" name="price" required>
  			</div>
  			<div>
  				<label>Image</label>
  				<input type="file" name="image" required>
  			</div>
  			<div>
  				<label>Description</label>
  				<input type="text" name="description" required>
  			</div>
  			<input class="btn btn-primary" type="submit" name="submit" value="submit">
  		</form>
		  	<div>
  		<table class="table tableted">
  			<tr style="color: #fff;">
  				<th>Food Name</th>
  				<th>Price</th>
  				<th>Descriptiom</th>
  				<th>Imsge</th>
  				<th>Action</th>
  			</tr>
  			@foreach($data as $data)
  			<tr>
  				<td>{{ $data->title }}</td>
  				<td>{{ $data->price }}</td>
  				<td>{{ $data->description }}</td>
  				<td><img src="foodimage/{{ $data->image }}"></td>
  				<td><a href="{{ url('/deletemenu',$data->id) }}">Delete</a>
  				    <a href="{{ url('/updateview',$data->id) }}">Update</a>
  				</td>
  			</tr>
  			@endforeach
  		</table>
  	</div>
<br>
<br>
<br>
<br>
  	</div>

  </div>
  	@include("admin.adminscript")
  
  </body>
</html>