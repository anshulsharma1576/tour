<?php

session_start();
include "loginquery.php" ;
$id=$_GET['d_id'];

$sql="delete from slider where id='$id'";
$q= mysqli_query($con,$sql);

?>
<script>
    alert "The Slider image one Row is deleted";
    window.location "manageslider.php";
</script>
