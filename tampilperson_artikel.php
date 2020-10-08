<?php
include "skrip_koneksi.php";

if (isset($_GET['judul'])) {
    $judul = $_GET['judul']; 
			} else {
die ("Error. No Judul Selected! ");
			}

$query = "SELECT judul, nama, tempat, tanggal, isi FROM input WHERE judul = '$judul'";
$sql = mysql_query($query);
$hasil = mysql_fetch_array($sql);
$judul = ($hasil['judul']);
$nama = ($hasil['nama']);
$tempat = ($hasil['tempat']);
$tanggal = ($hasil['tanggal']);
$isi = ($hasil['isi']);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style4.css"/>
	<title>Tampil Artikel</title>
	<style>
	body{

		background:#1e1e1e
	}
	td{
		font-family: Arial, Helvetica, sans-serif;
font-size: 20px;
color: #ffffff;
border: none;
padding-top: 15px;
text-align: justify;
padding : 9px

	}

table{
	margin-top: 10px;
}
	tr{
	margin-top: 30px;	
	}
	a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
	</style>
</head>

<body>
<div class=form>
<table width="100%" class="form">
	<tr>
		<td id= 1 align="center" style="font-size:30px; font-family:Ringbearer; text-decoration:underline"><?php echo $judul?></td>
	</tr>
	
	
	<tr>
		<td align="center" style="font-family:'Javanese Text'"><?php echo $isi?></td>
	</tr>	

	<tr>
		<td align="center" style="font-family:'Javanese Text'; font-style: italic; font-weight:bold"><?php echo $tempat?></td>
	</tr>
	<tr>
		<td align="center" style="font-family:'Javanese Text'; font-style: italic; font-weight:bold"><?php echo $tanggal?></td>
	</tr>
	<tr>
		<td align="center" style="font-family:'Javanese Text'; font-style: italic; font-weight:bold"><?php echo $nama?></td>
	</tr>
	
	<tr>
		<td align="right" width="10%"><a href="artikellain.php">kembali</a><br/></td>
	</tr>
</table>
</form>
<div/>
</body>
</html>
