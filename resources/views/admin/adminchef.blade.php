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
			.form label{
				color: #fff;
			}
		</style>
<div style="width: 70%; margin: auto; color: black;">
  	<form class="form" method="post" action="{{ url('/uploadchef') }}" enctype="multipart/form-data">
  		@csrf
  		<div>
  			<label>Chef Name</label>
  			<input type="text" name="name">
  		</div>
		<div>
  			<label>speciality</label>
  			<input type="text" name="speciality">
  		</div>
  		<div>
  			<label>Chef image</label>
  			<input type="file" name="image">
  		</div>
  		<input class="btn btn-success" type="submit" name="submit">
  	</form>
	<table class="table tableted">
		<tr style="color: #fff;">
			<th>Name</th>
			<th>Speciality</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
@foreach($data as $data)
		<tr>
			<td>{{ $data->name }}</td>
			<td>{{ $data->speciality }}</td>
			<td><img src="chefimage/{{ $data->image }}"></td>
			<td>
				<a href="{{url('updatechef', $data->id)}}">Update</a>
				<a href="{{url('deletechef', $data->id)}}">Delete</a>
			</td>
		</tr>
@endforeach
	</table>
</div>



  </div>
  	@include("admin.adminscript")
  
  </body>
</html>