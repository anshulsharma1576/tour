<?php
session_start();
if(!isset($_SESSION['mail'])){
    header("location:index.php");

}
include "header.php" ;
include "loginquery.php";
$sql1="select * from addcategory group by category";
$sql2="select * from addsubcategory group by category";
$z1=mysqli_query($con,$sql1);
$z2=mysqli_query($con,$sql2);


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
                                <h6 class="mb-0">Add Tour</h6>
                               
                            </div>
                <form action="addtourdb.php" method="POST" enctype="multipart/form-data">   
                            <div class="form-floating mb-3">
                            <input type="text" name="tourname" class="form-control"  placeholder="Add Tour Name">
                            <label for="floatingInput">Tour Name</label>
                            </div> 

                            <div class="form-floating mb-3">
                            <input type="number" name="package" class="form-control"  placeholder="Add Package Days">
                            <label for="floatingInput">Package Days</label>
                            </div> 
                            <div class="form-floating mb-3">
                            <input type="number" name="price" class="form-control"  placeholder="Add Price">
                            <label for="floatingInput">Price</label>
                            </div> 

                            <div class="form-floating mb-3">
                            <input type="textarea" name="description" class="form-control"  placeholder="Add Tour Description">
                            <label for="floatingInput">Description</label>
                            </div> 

                            <div class="form-floating mb-3">
                            <input type="file" name="images"  accept=".jpg,.png">
                            
                            </div> 
                            

                            <div class="form-floating mb-3">

                            <div class="row">
                            <div class="col-md-6">
                            category
                            <select name= "category" class="form-control"  >
                            <option value=" ">Select Category</option>
                             <?php
                            
                                    
                            while($result1=mysqli_fetch_assoc($z1)) {
                            ?>
       

                            <option value= "<?php echo $result1['id'];?>" > <?php echo $result1['category']; ?></option>
                            <?php
                            }
                            ?> 
                            </select>
                            </div>

                            <div class="col-md-6">
                                Subcatecogy
                            <select name= "subcategory" class="form-control" >
                            <option value="">Select Sub Category</option>
                            
                             <?php
                            
                                    
                            while($result2=mysqli_fetch_assoc($z2)) {
                            ?>
       

                            <option value= "<?php echo $result2['id'];?>" >  <?php echo $result2['subcategory']; ?></option>
                            <?php
                            }
                            ?> 
                            </select>
                            </div> 
                            </div> 
                        </div>
                            <div class="form-floating mb-3">
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Submit</button>
                            </div> 
                </form>  
                        </div>
                    </div>  
            </div>
            <!-- Widget End -->


            <!-- Footer Start -->
           <?php

            include "footer.php";
            ?>