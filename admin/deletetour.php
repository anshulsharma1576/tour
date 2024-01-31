
<?php
include "loginquery.php";
$id=$_GET['tournameid'];
$sql="delete from tour where id='$id'";
$q= mysqli_query($con,$sql);

header("location:optour.php");
?>