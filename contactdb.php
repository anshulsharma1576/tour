<?php
include "admin/loginquery.php";
$fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
$message = $_POST['message'];
 $sql="INSERT INTO contact (fname, lname, email, `message`) VALUES ('$fname', '$lname', '$email', '$message')";
$q=mysqli_query($con, $sql);
?>


<script>
    alert("Contact details are sent. We will reach to you later");
    window.location="contact.php";
</script>