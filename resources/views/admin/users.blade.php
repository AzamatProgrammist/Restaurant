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
  	<div align="center" style="width: 70%; margin: auto; text-align: center;">
  		<table class="table tableted" border="1">
  			<tr style="color: #fff;">
  				<th>Name</th>
  				<th>Email</th>
  				<th>Usertype</th>
  				<th>Update</th>
  				<th>Delete</th>
  			</tr>
  			@foreach($data as $user)
  			<tr>
  				<td>{{ $user->name }}</td>
  				<td>{{ $user->email }}</td>
  				<td>{{ $user->usertype }}</td>
  				@if($user->usertype == 0)
  				<td><a href="{{ url('/updateuser', $user->id) }}">Update</a></td>
  				@else
  				<td>Not update</td>
  				@endif
  				@if($user->usertype == 0)
  				<td><a href="{{ url('/deleteuser', $user->id) }}">Delete</a></td>
  				@else
  				<td>Not Delete</td>
  				@endif
  			</tr>
  			@endforeach
  		</table>
  	</div>
  	@include("admin.adminscript")
         <!-- partial -->
        </div>
  </body>
</html>