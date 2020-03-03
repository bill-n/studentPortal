
<?php
extract($_REQUEST);
include('db.php');

$sql=mysqli_query("select * from upload where id='$del'");
$row=mysqli_fetch_array($sql);

unlink("files/$row[name]");

mysqli_query("delete from upload where id='$del'");

header("Location:assignment_upload.php");

?>