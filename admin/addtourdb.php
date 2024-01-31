<?php

include "loginquery.php";
    $tourname = $_POST['tourname'];
    $package = $_POST['package'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $subcategory = $_POST['subcategory'];

    //$img=$_FILES['images'];
    $imgname=rand(0000,9999).$_FILES['images']['name'];
    $imgtmp=$_FILES['images']['tmp_name'];      
    //print_r($img);
    $path="tourimages/";
    $finalpath=$path.$imgname;
    move_uploaded_file($imgtmp,$finalpath);

//exit();

$sql= "INSERT INTO tour (tourname, package, price, `description`, images, category, subcategory) VALUES ('$tourname', '$package', '$price', '$description', '$finalpath ', '$category', '$subcategory')";
$t= mysqli_query($con, $sql);

?>

<script>
    alert("New Tour is added");
    window.location="optour.php";
</script>




