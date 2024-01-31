<?php
session_start();
    if(!isset($_SESSION['mail'])){
    header("location:index.php");

    }

include "loginquery.php";
    if(isset($_POST['btn'])){

        //image1
        $img1=rand(000,999).$_FILES['img1']['name'];
        $tmp1=$_FILES['img1']['tmp_name'];
        
        $path1="sliderimages/";
        // print_r($path1);die;
        $finalpath1= $path1.$img1;
        // print_r($finalpath1);die;
        move_uploaded_file($tmp1,$finalpath1);


        //image2
        $img2=rand(000,999).$_FILES['img2']['name'];
        $tmp2=$_FILES['img2']['tmp_name'];
        $path2="sliderimages/";
        $finalpath2=$path1.$img2;
        move_uploaded_file($tmp2,$finalpath2);

        //img3
        $img3=rand(000,999).$_FILES['img3']['name'];
        $tmp3=$_FILES['img3']['tmp_name'];
        $path3="sliderimages/";
        $finalpath3=$path3.$img3;
        move_uploaded_file($tmp3,$finalpath3);

        //img4
        $img4=rand(000,999).$_FILES['img4']['name'];
        $tmp4=$_FILES['img4']['tmp_name'];
        $path4="sliderimages/";
        $finalpath4=$path4.$img4;
        move_uploaded_file($tmp4,$finalpath4);

 $sql="INSERT INTO slider (img1, img2, img3, img4) VALUES ('$finalpath1', '$finalpath2', '$finalpath3', '$finalpath4')";

$q=mysqli_query($con, $sql); 
?>

<script>
    alert("The images are added on the page");
    window.location="manageslider.php";

</script>
<?php
}

include "header.php" ;

?>
<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
         <!-- Sidebar End -->

            <?php
                include "leftpane.php" ;

                ?>
        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php

include "topbar.php" ;
?>
            <!-- Navbar End -->


            <!-- Widget Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Add Categories</h6>
                                <a href="">Show All</a>
                            </div>
                                        <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div class="form-floating mb-3">
                                                <input type="file" name="img1"  accept=".jpg,.png" required>     
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="file" name="img2"   accept=".jpg,.png" >      
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="file" name="img3"  accept=".jpg,.png">     
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="file" name="img4"  accept=".jpg,.png">     
                                            </div>
                                        </div>
                                        <button type="submit" name= "btn" class="btn btn-primary py-3 w-100 mb-4">Submit</button>
                                        </form>  
                        </div>
                    </div>  
            </div>
            <!-- Widget End -->
            <!-- Footer Start -->
           <?php

            include "footer.php";
            ?>