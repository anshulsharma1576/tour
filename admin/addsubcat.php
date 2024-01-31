<?php
session_start();
if(!isset($_SESSION['mail'])){
    header("location:index.php");       
}
include "header.php" ;
include "loginquery.php";

$sql="select * from addcategory group by category";
$z=mysqli_query($con,$sql);


?>
<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- S pinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
            <?php
                include "leftpane.php";
            ?>
        <div class="content">
            
<?php
include "topbar.php" ;    
?>
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Add Sub Categories</h6>
                            </div>
                <form action="addsubcatdb.php" method="POST">
                            <div class="form-floating mb-3">
                            <input type="text" name="subcategory" class="form-control"  placeholder="Add Sub Category Name">
                            <label for="floatingInput">Add Sub Category Name</label>
                            </div>

                            <div class="form-floating mb-3">
                            <select name= "category" class="form-control" required  >
                                <option value="">Select Category</option>
                            
                             <?php
                            while($result=mysqli_fetch_assoc($z)) {
                            ?>
                            <option value="<?php echo $result['id']; ?>"> <?php echo $result['category']; ?></option>
                            <?php
                            }
                            ?> 
                            </select>
                           
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Submit</button>
                           
                            </div>  
                             
                </form>  
                        </div>
                    </div>  
            </div>  
           
           <?php

            include "footer.php";
            ?>