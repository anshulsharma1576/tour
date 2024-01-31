<?php
include "loginquery.php";

$category = $_POST['category'];
$subcategory = $_POST['subcategory'];

$sql ="INSERT INTO addsubcategory (category, subcategory) VALUES ('$category', '$subcategory')";
$t = mysqli_query($con, $sql);
?>

<script>
    alert("New Subcategory is added");
    window.location="opsubctg.php";
</script>





