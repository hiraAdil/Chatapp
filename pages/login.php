<?php
require '../includes/connection.php';
$random=rand(time(), 100000000);
if (isset($_POST['signup'])) {
   $name=$_POST['name'];
   $email=$_POST['email'];
   $number=$_POST['number'];
   $password=$_POST['password'];
   $password=base64_encode($password);
   $type=1;
   $sql="SELECT * FROM `trainees` WHERE `email` = '$email'";
   $result = $conn->query($sql);
   if ($result->num_rows == 0) {
   $sql= "INSERT INTO `trainees` ( `name`, `email`, `number`, `password`,`unique_id`) VALUES ('$name', '$email', '$number', '$password','$random');";

if ($conn->query($sql) === TRUE) {
  $dateOnly=date(ymd);
  $sql3="INSERT INTO `points`(`member_id`, `date`, `checkin`, `workoutgroup`, `benchPress`, `workout`) VALUES ('$random','$dateOnly','15','0','0','0')";
  $run=$conn->query($sql3);
  $sql= "INSERT INTO `users` ( `name`, `email`, `password`,`unique_id`) VALUES ('$name', '$email', '$password','$random');";
   if($conn->query($sql)==TRUE)
   {
  $_SESSION['name']=$name;
  $_SESSION['email']=$email;
  $_SESSION['number']=$number;
  $_SESSION['type']=$type;
  $_SESSION['unique_id']=$random;
  $_SESSION['mode']="user";

  header('location:../trainer.php');
}else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}}else{
	$_SESSION['dup_email']="THis email is already registered";
}
}
if(isset($_POST['login']))
{  
       $email=$_POST['email'];
       $password=$_POST['password'];
       $type=$_POST['type'];
       $password=base64_encode($password);
       if($type=='1'){
       $sql="SELECT * FROM `trainees` WHERE `email` = '$email' AND `password` ='$password';";
     }
       else if($type=='0'){
              $sql="SELECT * FROM `trainers` WHERE `email` = '$email' AND `password` ='$password';";

       }
	     $result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  $_SESSION['name']=$row['name'];

  $_SESSION['unique_id']=$row['unique_id'];
  $_SESSION['id']=$row['id'];
  $_SESSION['email']=$row['email'];
  $_SESSION['number']=$row['number'];
  $_SESSION['type']=$row['type'];
  if($type=="1")
  {
 header('location:../enrolled.php');
  }else if($type=="0"){
  	if($row['type']=='0')
    {  $_SESSION['mode']="admin";

      header('location:../admin/dashboard.php');
    }else if($row['type']==1){
       header('location:../Trainer/dashboard.php');
         $_SESSION['mode']="trainer";

    }
  }
  }
} else {
  $_SESSION['login_error']="Email or password not matched";
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
	<div class="signup slide-up">
		<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
		
		<h4 style="text-align: center;color: red;"><?php
               if (isset($_SESSION['dup_email'])) {
               	echo $_SESSION['dup_email'];
               	unset($_SESSION['dup_email']);
               }

			?></h4>
		<form name="myForm" action="login.php" onsubmit="return validateForm()" method="post">
		<div class="form-holder">
			
			<input type="text" class="input" placeholder="Name" name="name"  minlength="8" required="" />
			<input type="email" class="input" placeholder="Email" name="email"  required="" />
			<input type="text" class="input" placeholder="Phone Nymber" name="number"   pattern="[0-9]{9,18}" required="" />
			<input type="password" class="input" placeholder="Password" name="password" id="password"  required="" />
			<input type="password" class="input" placeholder="Confirm Password" id="cpassword" name="cpassword"   required="" />
			<h5 id="error" style="padding: 0px 10px;
    color: red;
    font-weight: bolder;"></h5>
		
		</div>
		
		<button class="submit-btn" type="submit" name="signup"   >Sign up</button>
	</form>
	</div>
	<div class="login ">
		<div class="center">
			<h2 class="form-title" id="login" ><span>or</span>Log in</h2>
			<h4 style="text-align: center;color: red;"><?php
               if (isset($_SESSION['login_error'])) {
               	echo $_SESSION['login_error'];
               	unset($_SESSION['login_error']);
               }

			?></h4>
			<form method="post">
			<div class="form-holder">
				<input type="email" class="input" placeholder="Please enter your Email" name="email" />
				<input type="password" class="input" placeholder="Please enter your Password" name="password" />
         <div style="    align-items: center;justify-content: center;height: 50px;display: flex;">
        <input type="radio" name="type" value="0"><label>Trainer</label>
        <input type="radio" name="type" value="1" checked=""><label>member</label>
      </div>
			</div>
			<button class="submit-btn" type="submit" name="login" >Log in</button>
		</form>
		</div>
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
