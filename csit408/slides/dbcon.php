<?php
$dbname ="myweb";

$conn = mysqli_connect("localhost","root","");
$select_db = mysqli_select_db($conn, $dbname);
if($select_db)
{
	echo "";
}
?>