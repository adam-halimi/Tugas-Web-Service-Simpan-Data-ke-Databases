<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "perhotelan";
mysql_connect($host, $user, $pass);
mysql_select_db($db)
or die ("Koneksi Gagal!".mysql_error());
?>