<!DOCTYPE html>
<html>
<head>
	<title>view 2</title>
</head>
<body>
		<h2><b>data produk berdasarkan kategori id {{$id_kategori}}</b></h2>

		jumlah data : {{$rek}}
		<table border="1">
			<thead>
				<tr>
					<th>No</th>
					<th>Kode jenis</th>
					<th>Nama Produk</th>
					<th>Stok</th>
					<th>Harga Beli</th>
					<th>Garga Jual</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pdata as $i=>$p)
				<tr>
					<th>{{$i+1}}</th>
					<th>{{$p->id_kategori}}</th>
					<th>{{$p->nama}}</th>
					<th>{{$p->qty}}</th>
					<th>{{$p->harga_beli}}</th>
					<th>{{$p->harga_jual}}</th>
				</tr>
			</tbody>
				@endforeach
		</table>
		
</body>
</html>