<?php
session_start();
$con=mysqli_connect("localhost", "root", "", "adminlog");
$sql1="select * from addcategory group by category";

$z1=mysqli_query($con,$sql1);



?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css/daterangepicker.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Tour Free Bootstrap Template for Travel Agency by Untree.co</title>
</head>

<body>


	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="site-navigation">
				<a href="index.html" class="logo m-0">Tour <span class="text-primary">.</span></a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
					<li class="active"><a href="index.php">Home</a></li>
					<li class="has-children">
						<a href="#">Category</a>
						<ul class="dropdown">
							
						
															<?php
								while($result1=mysqli_fetch_assoc($z1)) {
									?>
									<li class="has-children">

								<a href="#"> <?php echo $result1['category']; ?></a>
								
								
							
								<ul class="dropdown">
									<?php
								$sql2= "select * from addsubcategory where  category ='".$result1['id']."'";
									$z2=mysqli_query($con, $sql2);
									while($result2=mysqli_fetch_assoc($z2)){
										?>
									<li><a href="cattour.php?id=<?php echo $result2['id']; ?>"><?php echo $result2['subcategory']; ?></a></li>
									<?php
									}
									?>

								</ul	>
								</li>
								<?php } ?>
							
							
						</ul>
					</li>
				
					<li><a href="services.php">Tours</a></li>
					<li><a href="about.php">About</a></li>

					
					<li><a href="contact.php">Contact Us</a></li>
					<?php
					// print_r($_SESSION); die;		
					if(isset($_SESSION['lmail'])){
						$sql3="Select * from flog where usermail= '".$_SESSION['lmail']."'";
							$q=mysqli_query($con, $sql3);
							 $f=mysqli_fetch_assoc($q); 	
							//  print_r($f);
							//  die;
							?>
							<li><a href=""><b><?php echo $f['name'];?></b></a></li>|
						<li><a href="logout.php"><b>Logout</b></a></li>
						
						
						<?php
						}
						else{
							?>
							<li><a href="login.php"><b>Login</b></a></li>|
						<li><a href="signup.php"><b>Signup</b></a></li>
						<?php
						}
						?>
				</ul>

				<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>

			</div>
		</div>
	</nav>
