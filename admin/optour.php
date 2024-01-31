<?php
    session_start();
    include "loginquery.php";
    $sql="SELECT t.id,t.tourname,t.package,t.price,t.description,t.images,c.category,s.subcategory FROM `tour` t  left join addcategory c on t.category=c.id left join addsubcategory s on s.id=t.subcategory" ;
    $x=mysqli_query($con,$sql);
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
        <div class="content">  
<?php
include "topbar.php" ;
?>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Added Category</h6>
                               
                            </div>
                            <table class="table table-bordered">
                        <tr>
                            <td>S.No</td>
                            <td>Tour Name</td>
                            <td>Package</td>
                            <td>Price</td>
                            <td>Description</td>
                            <td>images</td>
                            <td>Category</td>
                            <td>Subcategory</td>
                            <td>Edit/Delete</td>
                        </tr>

                            <?php
                            $a=1;
                                while ($j=mysqli_fetch_assoc($x))
                                
                                {
                            ?>
                            <tr>
                            <td><?php echo  $a ;  ?></td>   
                            <td><?php echo $j['tourname'] ;  ?></td>
                            <td><?php echo $j['package'] ;  ?></td>
                            <td><?php echo $j['price'] ;  ?></td>
                            <td><?php echo $j['description'] ;  ?></td>
                            <td><img src="<?php echo $j['images'] ;  ?>" style="height:100p;width:100px;"></td>
                            <td><?php echo $j['category'] ;  ?></td>
                            <td><?php echo $j['subcategory'] ;  ?></td>
                            <td><a href="edittour.php?tournameid=<?php echo $j['id'];?>">Edit</a> <a href="deletetour.php?tournameid=<?php echo $j['id'];?>">Delete</a></td>
                            </tr>
                            <?php
                            $a++;
                                }
                            ?>
                            </table>
                        </div>
                    </div>  
            </div>  

            <!-- Footer Start -->
           <?php

            include "footer.php";
            ?>