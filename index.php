<?php
include 'includes/connection.php';

?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Muhammad Hasnain">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Gym</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/custom.css">
		</head>
		<body>

			<?php
include 'includes/header.php';

?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>		
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-12 col-md-12">
							<h1 class="text-uppercase">
								Real Fitness <br>
								Depends on Exercise					
							</h1>
							<p class="text-white text-uppercase pt-20 pb-20">
								A huge selection of workout videos and programs to help you look and feel your best.
							</p>
							<a href="pages/trainerlogin.php"><span style="    background-color: #f6214b;
    color: #fff;
    padding: 15px 25px;
    font-size: 18px;
    font-weight: 700;
    margin-left: 10px;">Become a Trainer</span></a>
    <?php  
    	if (!isset($_SESSION['membership'])) {
				          		?>
				          		
				          		 <a href="" id="membermodal" type="button"  data-toggle="modal" data-target="#exampleModal"><span style="    background-color: #f6214b;
    color: #fff;
    padding: 15px 25px;
    font-size: 18px;
    font-weight: 700;
    margin-left: 10px;">buy membership</span></a>
<?php
}
    ?>
   

    
						</div>												
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			
			<!-- Start top-course Area -->
			<!-- <section class="top-course-area section-gap" id="top-course">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10">Newest Free Workout Videoss</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>											
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-course">
								<div class="thumb">
									<img class="img-fluid" src="img/c1.jpg" alt="">
								</div>
								<a href="#"><h4>Resistance Band Butt and Thigh Workout - Lower Body Burnout </h4></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-course">
								<div class="thumb">
									<img class="img-fluid" src="img/c2.jpg" alt="">
								</div>
								<a href="#"><h4>Relaxing Stretching Workout - Feel Good Stretches for Stress Relief</h4></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-course">
								<div class="thumb">
									<img class="img-fluid" src="img/c3.jpg" alt="">
								</div>
								<a href="#"><h4>Sweaty Bodyweight Cardio Butt and Thigh Workout</h4></a>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-course">
								<div class="thumb">
									<img class="img-fluid" src="img/c4.jpg" alt="">
								</div>
								<a href="#"><h4>20 Minute Butt and Thigh Workout - Glute Activation Workout</h4></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-course">
								<div class="thumb">
									<img class="img-fluid" src="img/c5.jpg" alt="">
								</div>
							
								<a href="#"><h4>Sweaty Bodyweight Cardio Butt and Thigh Workout</h4></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-course">
								<div class="thumb">
									<img class="img-fluid" src="img/c6.jpg" alt="">
								</div>
								<span class="course-status">Course Available</span> -->
							<!-- 	<a href="#"><h4>Resistance Band Butt and Thigh Workout - Lower Body Burnout</h4></a>
							</div>
						</div>																		
					</div>
				</div>	
			</section> -->
			<!-- End top-course Area -->

			<!-- Start offer Area -->
			<section class="offer-area section-gap" id="offer">
				<div class="container">	
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class=" mb-10">We care about what we offer</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>									
					<div class="row">
						<div class="col-lg-4">
							<div class="single-offer">
								<img class="img-fluid" src="img/o1.png" alt="">
								<h4>Regular Exercise</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-offer">
								<img class="img-fluid" src="img/o2.png" alt="">
								<h4>Training on the go</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-offer">
								<img class="img-fluid" src="img/o3.png" alt="">
								<h4>Body Building Packages</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
								</p>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End offer Area -->
			
			<!-- Start convert Area -->
		<!-- 	<section class="convert-area" id="convert">
				<div class="container">
					<div class="convert-wrap">
						<div class="row d-flex justify-content-center">
							<div class="menu-content pb-70 col-lg-8">
								<div class="title text-center">
									<h1 class="text-white mb-10">Calclulate Your Body Mass Index</h1>
									<p class="text-white">Who are in extremely love with eco friendly system.</p>
								</div>
							</div>
						</div>						
						<div class="row justify-content-center align-items-start">
							<div class="col-lg-3 col-md-6 cols-img">
								<input type="text" name="feet" placeholder="Your Height (inches)" class="form-control mb-20">
							</div>
							<div class="col-lg-3 col-md-6 cols">
								<input type="text" name="pounds" placeholder="Your Weight (ibs)" class="form-control mb-20">
							</div>
							<div class="col-lg-3 col-md-6 cols">	
								<a href="#" class="primary-btn header-btn text-uppercase">Calculate Your BMI</a>
							</div>
						</div>						
					</div>
				</div>	
			</section> -->
			<!-- End convert Area -->

							

			<!-- Start feature Area -->
			<section class="feature-area">
				<div class="container-fluid">
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-3 feat-img no-padding">
							<img class="img-fluid" src="img/f1.jpg" alt="">
						</div>
						<div class="col-lg-3 no-padding feat-txt">
							<h6 class="text-uppercase text-white">Basic & Common Repairs</h6>
							<h1>Basic Revolutions</h1>
							<p>
								Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.
							</p>
						</div>
						<div class="col-lg-3 feat-img no-padding">
							<img class="img-fluid" src="img/f2.jpg" alt="">							
						</div>
						<div class="col-lg-3 no-padding feat-txt">
							<h6 class="text-uppercase text-white">Basic & Common Repairs</h6>
							<h1>Basic Revolutions</h1>
							<p>
								Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.
							</p>
						</div>
					</div>
				</div>	
			</section>
			<!-- End feature Area -->

			<!-- Start schedule Area -->
			<!-- <section class="schedule-area section-gap" id="schedule">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Schedule your Fitness Process</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="table-wrap col-lg-12">
							<table class="schdule-table table table-bordered">
								  <thead class="thead-light">
								    <tr>
								      <th class="head" scope="col">Course name</th>
								      <th class="head" scope="col">mon</th>
								      <th class="head" scope="col">tue</th>
								      <th class="head" scope="col">wed</th>
								      <th class="head" scope="col">thu</th>
								      <th class="head" scope="col">fri</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <th class="name" scope="row">Fitness Aero</th>
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								    </tr>
								    <tr>
								      <th class="name" scope="row">Senior Fitness</th>
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>						      
								    </tr>
								    <tr>
								      <th class="name" scope="row">Fitness Aero</th>
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>							      
								    </tr>
								    <tr>
								      <th class="name" scope="row">Senior Fitness</th>
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>							      
								    </tr>
								    <tr>
								      <th class="name" scope="row">Senior Fitness</th>
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>						      
								    </tr>
								    <tr>
								      <th class="name" scope="row">Senior Fitness</th>
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>						      
								    </tr>							    							    							    							    
								  </tbody>
							</table>							
						</div>
					</div>
				</div>	
			</section> -->
			<!-- End schedule Area -->
			
			
			<!-- Start team Area -->
			<section class="team-area section-gap" id="trainer">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Our Experienced Trainers</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row justify-content-center d-flex align-items-center">
						<div class="col-md-3 single-team">
						    <div class="thumb">
						        <img class="img-fluid" src="img/t1.jpg" alt="">
						        <div class="align-items-center justify-content-center d-flex">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
						        </div>
						    </div>
						    <div class="meta-text mt-30 text-center">
							    <h4>Ethel Davis</h4>
							    <p>Managing Director (Sales)</p>									    	
						    </div>
						</div>
						<div class="col-md-3 single-team">
						    <div class="thumb">
						        <img class="img-fluid" src="img/t2.jpg" alt="">
						        <div class="align-items-center justify-content-center d-flex">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
						        </div>
						    </div>
						    <div class="meta-text mt-30 text-center">
							    <h4>Rodney Cooper</h4>
							    <p>Creative Art Director (Project)</p>			    	
						    </div>
						</div>	
						<div class="col-md-3 single-team">
						    <div class="thumb">
						        <img class="img-fluid" src="img/t3.jpg" alt="">
						        <div class="align-items-center justify-content-center d-flex">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
						        </div>
						    </div>
						    <div class="meta-text mt-30 text-center">
							    <h4>Dora Walker</h4>
							    <p>Senior Core Developer</p>			    	
						    </div>
						</div>	
						<div class="col-md-3 single-team">
						    <div class="thumb">
						        <img class="img-fluid" src="img/t4.jpg" alt="">
						        <div class="align-items-center justify-content-center d-flex">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
						        </div>
						    </div>
						    <div class="meta-text mt-30 text-center">
							    <h4>Lena Keller</h4>
							    <p>Creative Content Developer</p>			    	
						    </div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End team Area -->	
<!--Price area here	-->

			

			<!-- Start callto Area -->
			<section class="callto-area section-gap relative">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<h1 class="text-white">Huge Transaction in last Week</h1>
							<p class="text-white pt-20 pb-20">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore <br> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
							</p>
							
							<a href="" id="membermodal" class="primary-btn"   type="button"  data-toggle="modal" data-target="#exampleModal">buy membership</a>							
						</div>
					</div>
				</div>	
			</section>
			<!-- End callto Area -->
			
<?php
include 'includes/footer.php';

?>
			
			
		</body>
	</html>



