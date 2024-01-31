<?php
session_start();
include "loginquery.php";
$sql= "select * from slider";
$q=mysqli_query($con, $sql);


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
                                <h6 class="mb-0">Manage Slider</h6>
                                <a href="">Show All</a>
                            </div>
                            <table class="table table-bordered text-center">
                        
                        <tr>
                        <td>S.N</td>
                        <td>Image 1</td>
                        <td>Image 2</td>
                        <td>Image 3</td>
                        <td>Image 4</td>
                        <td>Edit/Delete</td>
                        <td>Activate & Deactivate</td>
                        </tr>
                        <?php
                        $a=1;
                        while($i= mysqli_fetch_assoc($q))

                        {
                        ?>

                        <tr>
                        <td><?php echo $a ;?></td>
                     
                        <td> <img src="<?php echo $i['img1'];?>" style="height:200px; width:200px;"> </td>
                        <td> <img src="<?php echo $i['img2'];?>" style="height:200px; width:200px;"></td>
                        <td> <img src="<?php echo $i['img3'];?>" style="height:200px; width:200px;"></td>
                        <td> <img src="<?php echo $i['img4'];?>" style="height:200px; width:200px;"></td>
                        <td><a href="editslider.php?s_id=<?php echo $i['id'];?>">Edit</a> <a href="deleteslider.php?d_id=<?php echo $i['id'];?>">Delete</a></td>
                       <td>
                         <div class="row">
                            
                            <button class="btn btn-primary" type="submit ">Activate<button>
                            
                            
                            <button class="btn btn-danger" type="submit">Deactivate<button>
                            
                        </div>
                        <td>
                        
                        </tr>
                        <?php
                        $a++;

                        }
                        ?>
                </table>

                        </div>
                    </div>  
            </div>
            <!-- Widget End -->
            <!-- Footer Start -->
           <?php

            include "footer.php";
            ?>