<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Ramalan</th>
		</tr>
		
		<tr>
			<td>{{ $mingguan->id_zodiak }}</td>
			<td>{{ $mingguan->nama_zodiak }}</td>
			<td>{{ $mingguan->ramalan_zodiak }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->id_zodiak }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->id_zodiak }}">Hapus</a>
			</td>
		</tr>
		
	</table>


</body>
</html>