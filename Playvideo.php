<?php
include 'includes/connection.php';
$vid_id=$_GET['video_id'];
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
			<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
			<link rel="stylesheet" href="css/custom.css">
<style type="text/css">
	iframe{
		width: 100% !important;
		min-height: 60vh;
	}
	header{
		width: 100vw;
	}
</style>
		</head>
		<body>

	<?php
include 'includes/header.php';

?>
<div style="margin-top: 23vh">
</div>
			 <div class="row ">
			 	 <div class="col-8 m-0 p-0">
						<?php
			 	 		$sql="SELECT * FROM `video` WHERE `id` = '$vid_id'";
					     $result = $conn->query($sql);
					     $row = $result->fetch_assoc();
					     
					     ?>
					     <?php if($row['video_link']==""){?>
									<video controls style="width: 100%;max-height: 60vh" autoplay="">
  <source src="Trainer/videos/<?php echo $row['video_name']?>" >
  
  Your browser does not support the video tag.
</video>
<?php  

}else{?>

	<?php
	echo $row["video_link"];
}

 ?>

			 	 	</div>
  				<div class=" col-4 m-0 p-0"><div class="info has-actions">
            
      <div class="video-details-wrapper video-detail-wrapper">
        <div class="video-details">
          <h2 class="heading -x-small caps-half demi details text-light">Workout Details</h2>
          <div class="stats">
            <ul class="details-list">
              <li>
                <span class="detail-header">Video Title:</span>
                <span class="detail-value demi"><?php echo $row['video_title']  ?></span>
              </li>
              <li>
                <span class="detail-header">Calorie Burn:</span>
                <span class="detail-value demi"><?php echo $row['Calorie']  ?></span>
              </li>
              <li>
                <span class="detail-header">Difficulty:</span>
                <span class="detail-value demi"><?php echo $row['difficulty_level']  ?>/5</span>
              </li>
              <li>
                <span class="detail-header">Tags:</span>
                <span class="detail-value demi"><?php echo $row['Filter']  ?></span>
              </li>
              <li>
                <span class="detail-header">Body Focus:</span>
                <span class="detail-value demi"><?php echo $row['body_focus']  ?></span>
              </li>
              
                             
                          </ul>
            
          </div>
        </div>
      </div>
      
     
    </div></div>
 
</div>



<section class="sample-text-area">
	<h2 class="h2 text-center"><?php echo $row['video_title']  ?></h2>
				<div class="text-justify m-5"><?php echo $row['video_description']  ?>
					</div>
			</section>






















<?php
include 'includes/footer.php';

?>
			
			
		</body>
	</html>



