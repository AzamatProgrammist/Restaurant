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

  	<div class="container">
  		<table class="table tableted">
  			<tr style="color: #fff;">
  				<th>name</th>
  				<th>email</th>
  				<th>phone</th>
  				<th>guest</th>
  				<th>date</th>
  				<th>time</th>
  				<th>message</th>
  			</tr>
	@foreach($data as $data)
  			<tr>
  				<td>{{ $data->name }}</td>
  				<td>{{ $data->email }}</td>
  				<td>{{ $data->phone }}</td>
  				<td>{{ $data->guest }}</td>
  				<td>{{ $data->date }}</td>
  				<td>{{ $data->time }}</td>
  				<td>{{ $data->message }}</td>
  			</tr>
  	@endforeach
  		</table>
  	</div>


  </div>
  	@include("admin.adminscript")
  
  </body>
</html>