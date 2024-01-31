<?php
include "admin/loginquery.php";
$search= $_POST['search'];
$sql="Select * from tour where tourname like '%$search%' or price like'%$search%' or description like'%$search%' ";
$q= mysqli_query($con, $sql);

 //$f= mysqli_fetch_assoc($q);
 
  // print_r($f['tourname']);
 


?>

<?php
        while ($result1= mysqli_fetch_assoc($q)){
        ?>
        <div class="col-6 col-md-6 col-lg-3">
          <div class="media-1">
            <a href="element.php?id=<?php echo $result1['id'];?>" class="d-block mb-3"><img src="admin/<?php echo $result1['images'];?>" style="height:200px; width=100%" alt="Image" class="img-fluid"></a>
            <div class="d-flex">
              <div>
              <h3><?php echo "Rs". ' '.$result1['price'];?></h3>
                <h2 ><a href=""><?php echo $result1['tourname'];?></a></h2>
                
                <p><?php echo $result1['description']; ?></p>
              </div>
            </div>
          </div>
        </div>
        <?php
    }?>
