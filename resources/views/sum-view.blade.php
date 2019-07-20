<h1>Sum</h1>
<form action="{{ route('sum') }}" method="POST">
	{{ csrf_field() }}
	
	<input type="number" placeholder="nhap 1" name="n1">
	<input type="number" placeholder="nhap 2" name="n2">
	<input type="number" placeholder="nhap 3" name="n3">
	<input type="submit" value="giai phuong trinh">
</form>