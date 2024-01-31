<?php
session_start();
include "loginquery.php" ;
        $id=$_GET['catid'];
        $sql="select * from addsubcategory where id='$id'";
        $q= mysqli_query($con,$sql);
        $i=mysqli_fetch_assoc($q);

        $sql1="select * from addcategory group by category";
        $z=mysqli_query($con,$sql1);


    if(isset($_POST['update'])){
        $id1=$_POST['id'];
        $subcategory=$_POST['subcategory'];
        $category=$_POST['category'];
        $sql1="update addsubcategory set subcategory='$subcategory',category='$category' where id='$id1' ";
        mysqli_query($con,$sql1);
?>

<script>
    window.location="managesubcat.php";
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
    <?php
        include "leftpane.php" ;
    ?>
        <!-- Content Start -->
        <div class="content">
           
<?php
include "topbar.php" ;
?>
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Update Sub Category</h6>

                            </div>
                                    <form action="" method="POST">
                                    <div class="row ">   
                                    <div class="form-floating mb-3">  
                                    <div class="col-md-6">     
                                    Subcategory
                                    <input type="hidden" name='id' value="<?php  echo $i['id'] ;?>">
                                    <input type="text" class="form-control" name="subcategory" 
                                    value="<?php echo $i['subcategory'] ;?>" >
                                    </div>
                                    </div>
                                    <div class="form-floating mb-3"> 
                                    <div class="col-md-6">
                                        Category
                                    <select name="category" class="form-control" required  >
                            <?php     
                            while($result=mysqli_fetch_assoc($z)) {
                            ?>
                            <option value="<?php echo $result['id']; ?>" 
                            <?php if($result['id']==$i['category']){echo 'selected' ;} ?>> <?php echo $result['category']; ?></option>
                            <?php
                            }
                            ?> 
                            </select>   
                        </div>
                        </div>  
                                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="update">Update</button>
                                    </div> 
                                    </form>             
                        </div>
                    </div>  
            </div>  

            <!-- Footer Start -->
           <?php

            include "footer.php";
            ?>