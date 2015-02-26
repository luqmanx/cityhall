<?php
$host="localhost";                   	// database host
$user="root";                        	// database username
$pass="";								// database password
$dbname="aduan";                  // database name

$conn = mysql_connect($host, $user, $pass) or die ("Sorry...no connection");
mysql_select_db($dbname, $conn) or die ("Sorry..no database selected");
?>