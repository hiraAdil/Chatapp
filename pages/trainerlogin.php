<?php
require '../includes/connection.php';

$random=rand(time(), 100000000);
if (isset($_POST['signup'])) {







$sql="SELECT * FROM `trainees` WHERE `email` = '$email'";
   $result = $conn->query($sql);
   if ($result->num_rows == 0) {


    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = date("Ymdhis").$_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../admin/upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "../admin/upload/" . $filename);
               
            } 
        } else{
            echo "
<script>
    alert('SomeThing went wrong try again');
</script>"; 
exit();
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $password=base64_encode($_POST['password']);
    $skill=$_POST['skill'];
    strtolower($skill);
    $Description=$_POST['Description'];
    $age=$_POST['age'];
    $country=$_POST['country'];
    $birthday=$_POST['birthday'];
    $sql="INSERT INTO `trainers`( `name`, `email`, `number`, `password`, `type`, `profile_picture`, `skill`, `unique_id`, `description`, `birthday`, `age`, `country`) VALUES
     ('$name','$email','$number','$password','1','$filename','$skill','$random','$Description','$birthday','$age','$country')";

if ($conn->query($sql) === TRUE) {
    $sql="INSERT INTO `users`( `name`, `email`, `password`, `img`,`unique_id`) VALUES
     ('$name','$email','$password','$filename','$random')";
     if ($conn->query($sql) === TRUE) {
$_SESSION['name']=$name;
  $_SESSION['email']=$email;
  $_SESSION['number']=$number;
  $_SESSION['unique_id']=$random;
  $_SESSION['mode']="trainer";
  header('location:../Trainer/dashboard.php');
 
}
} else {
  $_SESSION['failure']="There went something ";

}

}
else{
 $_SESSION['dup_email']="This email is already registered";
}
}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>GYM WORLD Login</title>
  <link rel="stylesheet" href="assets/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form-structor">
	<div class="signup ">
		<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
		
		<h4 style="text-align: center;color: red;"><?php
               if (isset($_SESSION['dup_email'])) {
               	echo $_SESSION['dup_email'];
               	unset($_SESSION['dup_email']);
               }

			?></h4>
		<form name="myForm"  onsubmit="return validateForm()" method="post"  enctype="multipart/form-data">
		<div class="form-holder">
			
			<input type="text" class="input" placeholder="Name" name="name"  minlength="8" required="" />
			<input type="email" class="input" placeholder="Email" name="email"  required="" />
			<input type="text" class="input" placeholder="Phone Nymber" name="number"   pattern="[0-9]{9,18}" required="" />
       <textarea rows="3" name="skill" class="input" placeholder="Enter your skills e.g(skill-1, Skill-2)" required=""></textarea>
        <textarea rows="3" name="Description" class="input" placeholder="Enter Some description here" required=""></textarea>
        <label class="input">upload your profile picture</label>
         <input type="file"  class="input" name="photo" required="">
         <input type="number" placeholder="Enter your age" class="input" name="age" required="">
          <label class="input">Enter your date of birth</label>
          <input type="date" style="width: 30%"  class="input" placeholder="Enter your date of birth" name="birthday" required="" >
           <input type="text"  class="input" placeholder="Enter your country name" name="country" required="">
			<input type="password" class="input" placeholder="Password" name="password" id="password"  required="" />
			<input type="password" class="input" placeholder="Confirm Password" id="cpassword" name="cpassword"   required="" />
			<h5 id="error" style="padding: 0px 10px;
    color: red;
    font-weight: bolder;"></h5>
		
		</div>
		
		<button class="submit-btn" type="submit" name="signup"   >Sign up</button>
	</form>
	</div>
</div>
<!-- partial -->
<script>
function validateForm() {
  var password = document.forms["myForm"]["password"].value;
  var cpassword = document.forms["myForm"]["cpassword"].value;
  if (password!=cpassword) {
  	document.getElementById('error').innerHTML="Password not Matched! ";
    return false;
  }
}
</script>

<script type="text/javascript">
				function matchPass() {

       var password =  document.getElementById("password").value;
       var cpassword =  document.getElementById("cpassword").value;
       if (password==cpassword) {
       	document.getElementById("signupform").submit();
       }else{
       		
       }

  
} 
		</script>

  <script  src="assets/script.js"></script>
  

</body>
</html>
