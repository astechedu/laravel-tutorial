
@php
  $i=0;

@endphp

<table border="2">
   <thead>
   	 <tr><th>Id</th><th>Name</th><th>email</th></tr>
   </thead>

   <tbody>
	@foreach($students as $student)
	<tr>
	   <td>{{ $student['id'] }}</td>
	   <td>{{ $student['name'] }}</td>
	   <td>{{ $student['email'] }}</td>
	</tr>
	@endforeach
   </tbody>

</table>