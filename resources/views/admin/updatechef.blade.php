<x-app-layout>
    
</x-app-layout>




<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
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
  		<form class="form" action="{{ url('/chefupdate', $data->id) }}" method="post" enctype="multipart/form-data">

  			@csrf

  			<div>
  				<label>Name</label>
  				<input type="text" name="name" value="{{ $data->name }}" required>
  			</div>
  			<div>
  				<label>Speciality</label>
  				<input type="text" name="speciality" value="{{ $data->speciality }}" required>
  			</div>
  			
  			<div>
  				<label>Old image</label>
  				<img style="width: 200px;" src="chefimage/{{$data->image}}">
  				<input type="hidden" name="oldimage" value="{{$data->image}}">

  			</div>

  			<div>
  				<label>New Image</label>
  				<input type="file" name="image">
  			</div>
  			<input class="btn btn-primary" type="submit" name="submit" value="submit">
  		</form>
	<div>
  	


  	@include("admin.adminscript")
  
  </body>
</html>