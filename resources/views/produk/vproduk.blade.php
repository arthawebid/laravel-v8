<!DOCTYPE html>
<html>
<head>
	<title>view uts</title>
</head>
<body>
		<h2><b>isi tabel produk</b></h2>
		<table border="1">
			<thead>
				<tr>
					<th>No</th>
					<th>Kategori</th>
					<th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
				@foreach($produk as $i=>$p)
				<tr>
					<th>{{$i+1}}</th>
					<th>{{$p->kategori}}</th>
					<th>{{$p->keterangan}}</th>
				</tr>
			</tbody>
				@endforeach
		</table>
</body>
</html>