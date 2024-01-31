<?php

session_start();
include "loginquery.php" ;


$sql="select * from addsubcategory order by id desc";
$v= mysqli_query($con,$sql);
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
                                <h6 class="mb-0">All Categories</h6>
                                <a href="">Show All</a>
                            </div>

                            <table class="table table-bordered text-center">
                        
                                    <tr>
                                    <td>S.N</td>
                                    <td>category</td>
                                    <td>Sub category</td>
                                    </tr>
                                    <?php
                                    $a=1;
                                    while($i= mysqli_fetch_assoc($v))

                                    {
                                    ?>

                                    <tr>
                                    <td><?php echo $a ;?></td>
                                    <td><?php echo $i['category'];?></td>
                                    <td><?php echo $i['subcategory'];?></td>
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