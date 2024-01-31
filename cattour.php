<?php
include_once "admin/loginquery.php";
$id=$_REQUEST['id'];
 $sql  ="SELECT t.id, t.tourname, t.package, t.price, t.`description`, t.images, t.category, s.subcategory 
FROM `tour` t 
INNER JOIN addsubcategory s ON t.subcategory = s.id 
WHERE t.subcategory='$id' " ;
$a=mysqli_query($con, $sql);

?>

<?php
include "header.php";
?>

  <div class="hero hero-inner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
          <?php
             
									if($result2=mysqli_fetch_assoc($a)){
                    
                   

										?>
            <h1 class="mb-0"><?php echo $result2['subcategory']; ?></h1>
            <?php
                  }
                  ?>
            <p class="text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  
  
  
  <div class="untree_co-section">
    <div class="container">

      <div class="row">
        <?php
        while ($result= mysqli_fetch_assoc($a)){
        
        ?>
        <div class="col-6 col-md-6 col-lg-3">
          <div class="media-1">
            <a href="element.php?id=<?php echo$result['id']?>" class="d-block mb-3"><img src="admin/<?php echo $result['images'];?>" style="height:200px; width=100%" alt="Image" class="img-fluid"></a>
            <div class="d-flex">
              <div>
              <h3><?php echo "Rs". ' '.$result['price'];?></h3>
                <h2 ><a href="#"><?php echo $result['tourname'];?></a></h2>
                
                <p><?php echo $result['description']; ?></p>
              </div>
            </div>
          </div>
        </div>
        <?php
    }?>
      </div>
    </div>
  </div>

  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-6 col-lg-3">
          <div class="service text-center">
            <span class="icon-paper-plane"></span>
            <h3>Excellence in Travel</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-md-6 col-lg-3">
          <div class="service text-center">
            <span class="icon-tag"></span>
            <h3>Discover Best</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-md-6 col-lg-3">
          <div class="service text-center">
            <span class="icon-user"></span>
            <h3>A New Moments of Life</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-md-6 col-lg-3">
          <div class="service text-center">
            <span class="icon-support"></span>
            <h3>Joy To Your Journey</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="untree_co-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 class="section-title text-center mb-3">More Services</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        </div>
      </div>
      <div class="row align-items-stretch">
        <div class="col-lg-4 order-lg-1">
          <div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('images/hero-slider-1.jpg');"></div></div></div>
        </div>

        <div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >

          <div class="feature-1 d-md-flex">
            <div class="align-self-center">
              <span class="flaticon-house display-4 text-primary"></span>
              <h3>Beautiful Condo</h3>
              <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
            </div>
          </div>

          <div class="feature-1 ">
            <div class="align-self-center">
              <span class="flaticon-restaurant display-4 text-primary"></span>
              <h3>Restaurants & Cafe</h3>
              <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
            </div>
          </div>

        </div>

        <div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3" >

          <div class="feature-1 d-md-flex">
            <div class="align-self-center">
              <span class="flaticon-mail display-4 text-primary"></span>
              <h3>Easy to Connect</h3>
              <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
            </div>
          </div>

          <div class="feature-1 d-md-flex">
            <div class="align-self-center">
              <span class="flaticon-phone-call display-4 text-primary"></span>
              <h3>24/7 Support</h3>
              <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>

<?php
include "footer.php";
?>

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/moment.min.js"></script>
  <script src="js/daterangepicker.js"></script>

  <script src="js/typed.js"></script>
  
  <script src="js/custom.js"></script>

</body>

</html>
