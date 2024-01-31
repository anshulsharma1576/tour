<?php
include "loginquery.php";

$category = $_POST['addcategory'];
$sql = "INSERT INTO `addcategory`(`category`) VALUES ('$category')";

$t=mysqli_query($con, $sql);

?>
<script>

    alert("New Subcategory is added");
    window.location="opcat.php";
</script>