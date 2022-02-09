<?php
include 'includes/connection.php';
$member_id=$_SESSION['unique_id'];

$sql ="SELECT * FROM `approvel_request` WHERE `user_id`='$member_id'";
$result = $conn->query($sql);


?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="videos/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="videos/css/style.css"> <!-- Resource style -->

			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
			<style type="text/css">
<style type="text/css">
    .menu-top-left a{
      font-size: 1.5em;
    }
    iframe{
      max-height: 200px;
    }
  </style>
</head>
<body>
  
       <?php
include 'includes/header.php';

       ?>

  <main class="cd-main-content " style="margin-top: 20vh">
    <style type="text/css">
      .profile-card-4 {
    max-width: 300px;
    background-color: #FFF;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgb(0 0 0 / 10%);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
}
.profile-card-4 img {
    transition: all 0.25s linear;
}
.carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
    display: block;
    max-width: 100%;
    height: auto;
}
img {
    vertical-align: middle;
    border: 0;
}
.profile-card-4 .profile-content {
    position: relative;
    padding: 15px;
    background-color: #FFF;
}
.profile-card-4 .profile-name {
    font-weight: bold;
    position: absolute;
    left: 0px;
    right: 0px;
    top: -70px;
    color: #FFF;
    font-size: 17px;
}
.profile-card-4 .profile-description {
    color: #777;
    font-size: 12px;
    padding: 10px;
}
.profile-card-4 .profile-overview {
    padding: 15px 0px;
}
.form-outline .form-control~.form-label {
    position: absolute;
    top: 0;
    max-width: 90%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    left: .75rem;
    padding-top: .37rem;
    pointer-events: none;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
    -webkit-transition: all .2s ease-out;
    transition: all .2s ease-out;
    color: rgba(0,0,0,.6);
    margin-bottom: 0;
}

    </style>


	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title></title>
</head>
<body>
	
			<?php
include 'includes/header.php';

			?>

	<main class="cd-main-content " style="margin-top: 23vh">
    

<script type="text/javascript">
  function label(){
    document.getElementById('label').style.display='none';
  }
</script>

 

        <div class="row" id="main_data">

<?php

if ($result->num_rows > 0) {
  while($row2 = $result->fetch_assoc()) {
  	$unique_id=$row2['teacher_id'];
    $sql="SELECT * FROM `trainers` WHERE `type` = '1' and `unique_id`='$unique_id'";
    $result2=mysqli_query($conn,$sql);
    if($result2->num_rows>0)
     while($row = $result2->fetch_assoc()) {
    {
   ?>


      <div class="col-md-4">
    
    <div class="profile-card-4 text-center"><img src="admin/upload/<?php   echo $row['profile_picture']; ?>" class="img img-responsive">
        <div class="profile-content">
            <div class="profile-name"><?php   echo $row['name']; ?>
                <p><?php   echo $row['email']; ?></p>
                
            </div>
            <p style="background: #eaead7c4;padding: 5px"><b style="font-size: 1.2em">Skills : </b><?php  echo $row['skill'];?></p>
            <div class="profile-description"><?php
            echo $row['description'];
            ?></div>
            <div class="row">
                <!-- <div class="col-4">
                    <div class="profile-overview">
                        <p>TWEETS</p>
                        <h4><b>1300</b></h4></div>
                </div>
                <div class="col-4">
                    <div class="profile-overview">
                        <p>FOLLOWERS</p>
                        <h4>250</h4></div>
                </div>
                <div class="col-4">
                    <div class="profile-overview">
                        <p>FOLLOWING</p>
                        <h4>168</h4></div>
                </div> -->
                <span style="    width: 60%;
    margin: auto;">
                <!-- <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light" onclick="window.open('includes/msg.php?user_id=<?php //echo $row['unique_id']?>', '_self');">Message Now</button> -->
                <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light" onclick="window.location.href ='trainerprofile.php?id=<?php echo $row['unique_id']?>' ">View profile</button>
                        <button type="button" class="btn btn-success mt-3 btn-rounded waves-effect w-md waves-light" onclick='window.open("videos.php?id=<?php echo($row['id']) ?>&uid=<?php echo($row['unique_id']) ?>", "_self");'>watch videos</button>
                      </span>
            </div>
        </div>
    </div>
</div>


   

   <?php

}

    }
}}
    else{
    	echo "<h1 style='    margin: auto;
    width: 60vw;'>Not Yet Enrolled Please <a href='trainer.php'>Click here</a> to enroll</h1>";
    
}






    ?>
   
        </div>
        <!-- end row -->
  
    

	<!-- 	<div class="cd-filter">
			<form action="#" onsubmit="event.preventDefault()">
				<div class="cd-filter-block">
					<h4>Search by name</h4>
					
						<input type="search" placeholder="Enter name here" id="trainer_name">
						<button onclick="searchName()" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light" style="padding: 10px 20px">Search</button>
					
				</div> 

				<div >
					<h4>SEARCH BY SKILL</h4>

					<input type="radio" onclick="searchTag(this.value)" value="GYMNASTIC" name="tag">
					<label style="    font-size: 1.5em;
    margin-left: 11px;">GYMNASTIC</label>
    <br>
    <input type="radio" onclick="searchTag(this.value)" value="YOGA" name="tag">
					<label style="    font-size: 1.5em;
    margin-left: 11px;">YOGA</label>
			
				</div><br> 

		
				
			</form>

			<a href="#0" class="cd-close">Close</a>
		</div>  -->
		<!-- <a href="#0" class="cd-filter-trigger">Filters</a> -->
	</main> <!-- cd-main-content -->




		  	<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>About Us</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
							</div>
						</div>
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Contact Us</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="number">
									012-6532-568-9746 <br>
									012-6532-569-9748
								</p>
							</div>
						</div>						
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Newsletter</h4>
								<p>You can trust us. we only send  offers, not a single spam.</p>
								<div class="d-flex flex-row" id="mc_embed_signup">


									  <form class="navbar-form" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									    <div class="input-group add-on">
									      	<input class="form-control" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
											<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
									      <div class="input-group-btn">
									        <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
									      </div>
									    </div>
									      <div class="info mt-20"></div>									    
									  </form>
								</div>
							</div>
						</div>						
					</div>
					<div class="footer-bottom row">
						<p class="footer-text m-0 col-lg-6">
							
						</p>
						<div class="footer-social col-lg-6">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->
			<script type="text/javascript">
				function Asktojoin(id){
						$.ajax({
  method: "POST",
  url: "includes/approvel_request.php",
  data: { app_id: id }
})
  .done(function( response ) {
    alert(response);

  });
				}
function searchName()
{
var name=document.getElementById("trainer_name").value;

						$.ajax({
  method: "POST",
  url: "includes/searchName.php",
  data: { T_name: name }
})
  .done(function( response ) {
   
    document.getElementById("main_data").innerHTML=response;

  });
}
function searchTag(tag)
{

$.ajax({
  method: "POST",
  url: "includes/sarchTag.php",
  data: { stag: tag }
})
  .done(function( response ) {
   
    document.getElementById("main_data").innerHTML=response;

  });
}
			</script>
<script src="videos/js/jquery-2.1.1.js"></script>
<script src="videos/js/jquery.mixitup.min.js"></script>
<script src="videos/js/main.js"></script> <!-- Resource jQuery -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>			
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	

</body>
</html>