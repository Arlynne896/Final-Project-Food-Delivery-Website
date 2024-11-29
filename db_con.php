<?php 

$sname= "localhost";
$unmae = "root";
$password= "";

$db_name ="test";

$con = mysqli_connect($sname,$unmae,$password,$db_name);

if (!$con) {
    echo "Connection failed!";
}
//change this file name into "db_con.php" to connect into database
