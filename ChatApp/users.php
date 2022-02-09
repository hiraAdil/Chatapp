<?php 

  include_once "../includes/connection.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: ../pages/login.php");
  }
  if(!isset($_SESSION['mode'])){
    header("location: ../pages/login.php");
  }
  if($_SESSION['mode']=="user"){
    header("location: ../pages/login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
         <img src="../admin/upload/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['name']?></span>
           
          </div>
        </div>
        
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><!-- <i class="fas fa-search"></i> --></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>

