<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" href="style3.css">
	<title>Input Artikel</title>
</head>
<body>
	<div class="box-area">
		<div class="wrapper">
			<div class="logo">
				<header>
            <div class="wrapper">
                <div class="logo">
                    <h2>Halaman Input</h2></header>
			</div>
		</div>
	</div>
	<div class="content-area">
            <div class="wrapper">
	<form action="add_artikel.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	
	<table width="100%" class="form">
		<tr>
			<td width="15%" margin-top="10px">Judul Artikel :</td>
			<td><input type="text" name="judul" size="40" style="padding: 6px; border-radius: 8px"></td>
		</tr>
		<tr>
			<td width="15%">Nama Penulis :</td>
			<td><input type="text" name="nama" size="40" style="padding: 6px; border-radius: 8px"></td>
		</tr>
		<tr>
			<td width="15%">Sinopsis :</td>
			<td><textarea style="padding: 10px; border-radius: 8px"name="sinopsis" rows="3" cols="90"></textarea></td>
		</tr>
		<tr>
			<td>Tempat : </td>
			<td><input style="padding: 6px; border-radius: 8px" type="text" name="tempat" size="20"></td>
		</tr>
		<tr>
			<td>Tanggal :</td>
			<td><input style="padding: 6px; border-radius: 8px" type="date" name="tanggal" size="20"></td>	
		</tr>
		<tr>
			<td>Isi Artikel :</td>
			<td><textarea style="padding: 20px; border-radius: 8px"name="isi" rows="20" cols="90"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan" name="submit">
				<input type="reset" value="Reset" name="reset"></td>
		</tr>
	</table>
</form>
</div>
</div>
</body>
</html>