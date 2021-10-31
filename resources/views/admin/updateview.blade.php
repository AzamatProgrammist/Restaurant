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
  		<form class="form" action="{{ url('/update', $data->id) }}" method="post" enctype="multipart/form-data">

  			@csrf

  			<div>
  				<label>Title</label>
  				<input type="text" name="title" value="{{ $data->title }}" required>
  			</div>
  			<div>
  				<label>Price</label>
  				<input type="number" name="price" value="{{ $data->price }}" required>
  			</div>
  			
  			<div>
  				<label>Description</label>
  				<input type="text" name="description" value="{{ $data->description }}" required>
  			</div>

  			<div>
  				<label>Old Image</label>
  				<img height="200" width="200" src="foodimage/{{ $data->image }}">
  				<input type="hidden" name="oldimage" value="{{ $data->image }}">
  			</div>

  			<div>
  				<label>New Image</label>
  				<input type="file" name="image">
  			</div>
  			<input class="btn btn-primary" type="submit" name="submit" value="submit">
  		</form>
	<div>
  	


  </div>
  	@include("admin.adminscript")
  
  </body>
</html>