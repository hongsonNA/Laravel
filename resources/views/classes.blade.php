<table border=1>
	<td>id</td>
	<td>Name</td>
	<td>teacher_name</td>
	<td>Major</td>
	<td>max_student</td>
	<tbody>
		@foreach($classes as $value)
		<tr style="background: {{ $value->id % 2 ? 'yellow' : 'green' }}">
			<td>{{ $value->id }}</td>
			<td>{{ $value->name }}</td>
			<td>{{ $value->teacher_name }}</td>
			<td>{{ $value->major }}</td>
			<td>{{ $value->max_students }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
<!-- nvq0603 -->