<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "pemrograman";

mysql_connect($server,$username,$password) or die ("failed connection");
mysql_select_db($database) or die ("Database can't be opened");

?>