<?php
$id=$_GET['tournameid'];
include "loginquery.php";

$sql="select * from tour where id='$id'" ;
$sql1="select * from addcategory group by category";
$sql2="select * from addsubcategory group by category";
$z1=mysqli_query($con,$sql1);
$z2=mysqli_query($con,$sql2);
$q= mysqli_query($con,$sql);
$i=mysqli_fetch_assoc($q);

if(isset($_POST['update'])){
        $id1=$_POST['id'];
        $tourname=$_POST['tourname'];
        $package=$_POST['package'];
        $price=$_POST['price'];
        $description=$_POST['description'];
        $category=$_POST['category'];
        $subcategory=$_POST['subcategory'];     
    //      
 
    // if(!empty ($imgname=rand(0000,9999).$_FILES['images']['name'])){
    //     $imgtmp=$_FILES['images']['tmp_name'];      
    //     //print_r($img);
    //     $path="tourimages/";
    //     $finalpath=$path.$imgname;
    //     move_uploaded_file($imgtmp,$finalpath);      


    // }
    $img1=rand(0000,99999).($_FILES ['images']['name']);
                    $temp1=$_FILES['images']['tmp_name'];
                    $path1 ="tourimages/";  
                   $dir1 =$path1.$img1;
                    $upload1 =move_uploaded_file($temp1,$dir1);

 

     
    $tn1= "UPDATE tour SET tourname= '$tourname', package= '$package', price= '$price', `description`= '$description', category= '$category', subcategory= '$subcategory' , images='$dir1' WHERE id='$id1';";
    mysqli_query($con,$tn1);
    // die;
    ?>
    <!-- <script>
        alert("Update Complete");
    </script> -->
    <?php
}
include "header.php";
?>
<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
      
            <?php
                include "leftpane.php" ;
            ?>
        
        <div class="content">

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
                                <h6 class="mb-0">Update Tour</h6>
                               
                            </div>
                <form action="" method="POST" enctype="multipart/form-data" >   

                <div class="row">
                                    <div class="col-md-6">
                                    Tour Name
                                    <input type="hidden" name='id' value="<?php  echo $i['id'] ;?>">
                                    
                                    <input type="text" class="form-control" name="tourname" placeholder="Tour Name"
                                    value="<?php echo $i['tourname'] ;?>">
                                    </div>

                                     <div class="col-md-6">
                                        Package
                                    <input type="text" class="form-control" name="package" placeholder="Package"
                                    value="<?php echo $i['package'] ;?>">
                                    </div>
                </div>

                <div class="row">
                                    <div class="col-md-6">
                                        Price
                                    <input type="text" class="form-control" name="price" placeholder="Price"
                                    value="<?php echo $i['price'] ;?>">
                                    </div>

                                    <div class="col-md-6">
                                     <label>Image</label>
                                    <input type="file"  name="images" placeholder="Update File"
                                    value="<?php echo $i['images'] ;?>">
                                    </div>
                </div>

                                    <div class="form-floating mb-3">
                                        Description
                                    <input type="text" class="form-control" name="description" placeholder="Description"
                                    value="<?php echo $i['description'] ;?>">
                                    </div>

                            <div class="row">
                            <div class="col-md-6">
                            Category
                            <select name= "category" class="form-control"  >
                            <option value="">Select Category</option>
                             <?php
                            
                                    
                            while($result1=mysqli_fetch_assoc($z1)) {
                            ?>
       

                            <option value="<?php  echo $result1['id']; ?>" <?php if ($result1['id']==$i['category']){ echo 'selected';}?> > <?php  echo $result1['category']; ?> </option>
                            <?php
                            }
                            ?> 
                            </select>
                            </div>

                            <div class="col-md-6">
                                Subcategory
                            <select name= "subcategory" class="form-control" >
                            <option value="">Select Sub Category</option>
                            
                             <?php
                            
                                    
                            while($result2=mysqli_fetch_assoc($z2)) {
                            ?>
       

                            <option value="<?php echo $result2['id']; ?>" <?php if ($result2['id']==$i['subcategory']){ echo 'selected';}?>> <?php echo $result2['subcategory']; ?></option>
                            <?php
                            }
                            ?> 
                        
                            </select>
                            </div> 
                            </div> 
                            
                              
                        
                                    <div class="form-floating mb-3">
                                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="update">Update</button>
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