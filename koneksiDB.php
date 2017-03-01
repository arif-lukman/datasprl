<?php
//yo mamen

$host = "localhost";

$username = "root";

$password = "";

$database = "data_sprl";

$koneksi = mysql_connect($host, $username, $password);

mysql_select_db($database, $koneksi) or die( "MySQL Gagal Koneksi" );

?>