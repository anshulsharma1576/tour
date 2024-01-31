<?php

if(isset($_POST['btn'])){
    include "admin/loginquery.php";
    $usermail=$_POST['usermail'];
    $userpassword=$_POST['userpassword'];
    $mobileno=$_POST['mno'];
    $username=$_POST['username'];
    $sql="INSERT INTO flog (usermail,userpassword,mobile,`name`) Values('$usermail', '$userpassword', '$mobileno', '$username')";
    $q = mysqli_query($con, $sql);
    $ch="Select * from flog where usermail='".$usermail."'";
    $qch=mysqli_query($con,$ch);
   // $result= mysqli_fetch_assoc($qch);
    $row=mysqli_num_rows($qch);
    // print_r($row); die;
    if($row>1)
    {?>
        <script>
        alert("This email is already Exist Kindly Login");
        window.location="login.php";
        </script>
    <?php
    }
    else{
        ?>
        <script>
        alert("You are Registerd with us");
        window.location="index.php";
        </script>
       <?php }
    }?>
    
    
    
        
   


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tour Signup</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Travel</h3>
                            </a>
                            <h3>Sign In</h3>    
                        </div>

<form action="" method="POST">
                        <div class="form-floating mb-3">
                          <label for="floatingInput">Email address</label>
                          
                       
                            <input type="text" name="usermail" class="form-control"  placeholder="userid">
                        </div>
                        <div class="form-floating mb-4">
                        <label for="floatingPassword">Password</label>
                            <input type="password" name="userpassword" class="form-control" id="floatingPassword" placeholder="Password">
                        </div>  
                        <div class="form-floating mb-4">
                        <label for="floatingPassword">Name</label>
                            <input type="text" name="username" class="form-control" id="floatingPassword" placeholder="username">
                        </div>  

                        <div class="form-floating mb-4">
                        <label for="floatingPassword">Mob.No</label>
                            <input type="number" name="mno" class="form-control" id="floatingPassword" placeholder="Mob.no">
                        </div>  
    
                        <div class=row>
                            <div class=col-md-6>

                            <?php
                            $a="abcdefghijklmnopqrstuvwyzABCDEFGHIJKLMNOPQRSTUVWYZ1234567890";

                            $c= str_shuffle($a);
                            $captcha= substr($c,0,6);

                            
                            ?>
                        <div class="form-floating mb-4">
                        <label for="floatingtext">Captcha</label><br>
                            <input type="hidden" name="cap1" class="form-control " id="cap1" placeholder="captcha" value="<?php echo $captcha; ?>">
                            
                            <?php echo $captcha; ?>
                        </div>
                        </div>
                        <div class=col-md-6>
                        <div class="form-floating mb-4">
                        <label for="floatingPassword">Enter CAPTCHA</label>    
                        <input type="text" name="cap" class="form-control" id="cap" placeholder="captcha" required>
                            
                        </div>
                        </div>
                        </div>
                        

                        
                       
                        <button type="submit" name="btn" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        <p class="text-center mb-0">Don't have an Account? <a href="signup.php">Sign Up</a></p>
</form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>