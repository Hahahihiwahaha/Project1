<?php
		include"koneksi/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tampil Artikel</title>
</head>
<body>
	<div id="content">
		<h2>Artikel - artikel lainnya</h2>
		<table id="tabel">
			<?php
					$no = 0;
					$query = "SELECT judul, sinopsis
					FROM input ORDER BY judul";
					$sql = mysql_query($query) ;
					while ($hasil = mysql_fetch_array ($sql)) {
						$judul = $hasil['judul'];
						$sinopsis = $hasil['sinopsis'];
					
						//
						//tampilkan data guru
			?>
			<tr>
				<td align="center"><a href="<?php echo $judul?>"></a></td></tr>
				<tr><td align="center"><?php echo $sinopsis?></td>

				<td>
				<a href="edit_artikel.php?judul=<?php echo $judul?>">Edit</a><br/>
				<a href="hapus_artikel.php?judul=<?php echo $judul?>"onClick="return confirm('Yakin ingin menghapus')">Delete</a>
				</td>
			</tr>
			<?php }?> 
		</table>
	</div>
</body>
</html>