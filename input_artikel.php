<!DOCTYPE html>
<html>
<head>
	<title>Input Artikel</title>
</head>
<body>
	<form action="add_artikel.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<table width="100%" class="form">
		<tr>
			<td width="15%">Judul Artikel</td>
			<td><input type="text" name="judul" size="40"></td>
		</tr>
		<tr>
			<td width="15%">Nama Penulis</td>
			<td><input type="text" name="nama" size="40"></td>
		</tr>
		<tr>
			<td width="15%">Sinopsis</td>
			<td><textarea name="sinopsis" rows="3" cols="90"></textarea></td>
		</tr>
		<tr>
			<td>Tempat</td>
			<td><input type="text" name="tempat" size="20"></td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td><input type="date" name="tanggal" size="20"></td>	
		</tr>
		<tr>
			<td>Isi Artikel</td>
			<td><textarea name="isi" rows="20" cols="90"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan" name="submit">
				<input type="reset" value="Reset" name="reset"></td>
		</tr>
	</table>
</form>
</body>
</html>