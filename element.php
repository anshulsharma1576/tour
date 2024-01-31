<style>
        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            position: relative;
            display: inline-block;
        }

        .rating input {
            display: none;
        }

        .rating label {
            font-size: 25px;
            color: #ccc;
            cursor: pointer;
        }

        .rating label:before {
            content: '★';
            margin: 5px;
        }

        .rating input:checked ~ label {
            color: #f90;
        }

        .rating label:hover,
        .rating label:hover ~ label {
            color: #f90;
        }
    </style>

<?php
include "admin/loginquery.php";
$id=$_REQUEST['id'];
$sql="Select *from tour where id= '$id'";
$q=mysqli_query($con,$sql);
$res=mysqli_fetch_assoc($q);






if(isset($_POST['btn'])){
        $fname=$_POST['fname'];
        $message=$_POST['message'];
        $rating=$_POST['rating'];
        $email=$_POST['email'];
        $sql1="INSERT INTO review (fname, email, `message`, rating) VALUES('$fname', '$email', '$message', '$rating')";
        $query=mysqli_query($con, $sql1);
        
        


}
?>
<?php
include "header.php";
if(isset($_SESSION['lmail'])){
 

   $sql2="Select * from flog where usermail='".$_SESSION['lmail']."'";
  
       $q2=mysqli_query($con,$sql2);
       $i2= mysqli_fetch_assoc($q2);
      //  print_r($i2);
      //  die;
       
}
?>
  <div class="hero hero-inner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
            <h1 class="mb-0"><?php echo $res['tourname'];?></h1>
            <p class="text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  
  <div class="untree_co-section">
    <div class="container my-5">
      <div class="mb-5">
        <div class="owl-single dots-absolute owl-carousel">
          <img src="admin/<?php echo $res['images'];?>" alt="No Image" class="img-fluid">
        </div>
      </div>

      <div class="row justify-content-center">

        <div class="col-lg-4">
          <div class="custom-block" data-aos="fade-up">
            <h2 class="section-title">Details</h2>
            <h1><?php echo "Rs.". $res['price'];?></h1>
            <div class="custom-accordion" id="accordion_1">
              <div class="accordion-item">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">About Tour</button>
                </h2>
                <div id="collapseTwo" class="collapse" aria-labelledby  ="headingTwo" data-parent="#accordion_1">
                  <div class="accordion-body">
                  <p><?php echo $res['description']; ?></p>
                  </div>

                </div>
                <div class="container border-box">
                <h2 class="mb-0">Comments</h2>
                <?php
                $sql3="Select * from review ";
                $q3= mysqli_query($con,$sql3);
                $f3= mysqli_fetch_assoc($q3);
                // print_r($f3);
                ?>
                
                <h2><?php echo $f3['email'] ; ?></h2>
                <h2> <?php $k=$f3['rating'] ; 
                for
                  
                  ($i=0; $i<$k; $i++ ) 
                  print_r('★');

                  ?> </h2>
                  <p><?php echo $f3['message'] ; ?></p>

                </div>
              </div> 

            </div>
          </div> <!-- END .custom-block -->
        </div>
        <div class="col-lg-4">
          <div class="custom-block" data-aos="fade-up" data-aos-delay="100">
            <h2 class="section-title">Form</h2>
            <form action="" class="contact-form bg-white" method="POST">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="text-black" for="fname">Name</label>
                    <input type="text" name="fname" value= "<?php echo $i2['name'] ; ?>" class="form-control" id="fname" readonly>
                  </div>
                </div>
                
              </div>
              <div class="form-group">
                <label class="text-black" for="email">Email address</label>
                
                <input type="email" value= "<?php echo $i2['usermail'] ; ?>" name="email" readonly class="form-control" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>

              <div class="form-group">
                <label class="text-black" for="message">Message</label>
                <textarea name="message" class="form-control" id="message" cols="30" rows="5"></textarea>
              </div>
              <div class="form-group">
                <div class="rating">
                      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 stars"></label>
                      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 stars"></label>
                      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 stars"></label>
                      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 stars"></label>
                      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
                </div>
              </div>
              <div class="form-group">
                <label class="text-black" for="select">Select</label>

                <select name="" id="select" class="custom-select">
                  <option value="">Untree.co</option>
                  <option value="">Offers high quality free template</option>
                </select>

              </div>
              <div class="form-group">
                <label class="control control--checkbox">
                  <span class="caption">Custom checkbox</span>
                  <input type="checkbox" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
              </div>
              <button type="submit" name="btn" class="btn btn-primary">Submit</button>
            </form>
          </div>

          <div class="custom-block" data-aos="fade-up">
            <h2 class="section-title">Social Icons</h2>
            <ul class="list-unstyled social-icons light">
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-google"></span></a></li>
              <li><a href="#"><span class="icon-play"></span></a></li>
            </ul>
          </div> <!-- END .custom-block -->

          

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
