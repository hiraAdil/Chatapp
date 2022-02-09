<?php
include 'includes/connection.php';
  if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 9;
        $offset = ($pageno-1) * $no_of_records_per_page;

        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM blog";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

  
      function truncate($string,$length=100,$append="&hellip;") {
  $string = trim($string);

  if(strlen($string) > $length) {
    $string = wordwrap($string, $length);
    $string = explode("\n", $string, 2);
    $string = $string[0] . $append;
  }

  return $string;
}



	$sql="SELECT * FROM `blog`   ORDER BY id DESC LIMIT $offset, $no_of_records_per_page";
	if ($result=mysqli_query($conn,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		echo $rowcount;
      	//if no rows returned show no news alert

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
			<link rel="stylesheet" href="css/blog.css">
			<style type="text/css">
				
.card-img {
  border-bottom-left-radius: 0px;
  border-bottom-right-radius: 0px;
}
.card{
	
	margin-top: 20px;
}

.card-title {
  margin-bottom: 0.3rem;
}

.cat {
  display: inline-block;
  margin-bottom: 1rem;
}

.fa-users {
  margin-left: 1rem;
}

.card-footer {
  font-size: 0.8rem;
}

			</style>
		</head>
		<body>

			<?php
include 'includes/header.php';

?>
<div class="container" style="margin-top:7vh">
<div class="row">

	
    
    


<?php

		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	//if there are rows available display all the results
      	
		foreach ($result as $bloggrid => $griditem) {
			
			
      	?>
  
   
            
     


      <div class="card col-lg-4 col-md-6 col-sm-12">
        <img class="card-img" src="admin/upload/<?php echo $griditem['image']?>" alt="Bologna">
        <div class="card-img-overlay">
        	 <a href="viewblog.php?id=<?php echo $griditem['id'];?>" class="btn btn-info">Read More</a>
         
        </div>
        <div class="card-body">
          <h4 class="card-title"><?php echo $griditem['blog_title'];  ?></h4>
          <small class="text-muted cat">
            <i class="far fa-clock text-info"></i> <?php// echo $griditem['author']   ?>
            <!-- <i class="fas fa-users text-info"></i> 4 portions -->
          </small>
          <div class="card-text"><?php  
                echo $griditem['short_text'];
				?></div>

        </div>
        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
          <div class="views"><? echo $griditem['date']?>
          </div>
          <div class="stats">
           	 <a href="#" class="btn btn-light btn-sm"><?php  echo $griditem['refrence'] ?></a>
            <i class="far fa-comment"></i> 12
          </div>
           
        </div>
      </div>
        
     
       
 















        	<?php


        }
       
		}
	

?>

</div>   </div>
  
</div>

<style type="text/css">
	ul.pagination{
		padding: 20px;
		width: 20%;
		align-content: center;
		margin: auto;
	}
	ul.pagination li
	{
		text-align: center;
    align-items: center;
    padding: 10px;
    margin: auto;
    font-size: 20px;
    font-weight: bold;
	}
	ul.pagination li a{
		color: royalblue;
	}
</style>

  <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>

  

</div>
		
<?php
include 'includes/footer.php';

?>
			
			
		</body>
	</html>



