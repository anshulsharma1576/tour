<?php

session_start();
include "loginquery.php" ;
$id=$_GET['catid'];

$sql="select * from addcategory where id='$id'";
$q= mysqli_query($con,$sql);

$i=mysqli_fetch_assoc($q);

if(isset($_POST['update'])){
$id1=$_POST['id'];
$category=$_POST['category'];
$sql1="update addcategory set category='$category' where id='$id1' ";
mysqli_query($con,$sql1);
?>

<script>
    window.location="managecategory.php";
</script>

<?php
}
?>
<?php
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
                                <h6 class="mb-0">Update Category</h6>

                            </div>
                                    <form action="" method="POST">
                                    <div class="form-floating mb-3">
                                    
                                    
                                    <input type="hidden" name='id' value="<?php  echo $i['id'] ;?>">
                                    <input type="text" class="form-control" name="category" 
                                    value="<?php echo $i['category'] ;?>">

                                         
                                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="update">Update</button>
                                    </div> 
                                    </form>       
                                    <p><?php echo $_SERVER['QUERY_STRING'] ;?></p>

                        </div>
                    </div>  
            </div>  

            <!-- Footer Start -->
           <?php
            
            include "footer.php";
            ?>