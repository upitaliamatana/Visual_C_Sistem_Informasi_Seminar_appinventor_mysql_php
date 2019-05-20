<!DOCTYPE html>
<html>
<head>
	<title>DATA MAHASISWA</title>
</head>
<body>
 
	<table border="1">
		<tr>
			<th>NO</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Fakultas</th>
			<th>Judul Seminar</th>
			<th>Nilai</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($conn,"SELECT * FROM datamhs INNER JOIN inputnilai
		ON datamhs.nim=inputnilai.nim");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jurusan']; ?></td>
				<td><?php echo $d['fakultas']; ?></td>
				<td><?php echo $d['judulseminar']; ?></td>
				<td><?php echo $d['nilai']; ?></td>
				<td>
					<a href="edit.php?nim=<?php echo $d['nim']; ?>">Edit</a>
					<a href="hapus.php?nim=<?php echo $d['nim']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>