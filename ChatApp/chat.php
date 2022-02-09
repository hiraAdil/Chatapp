<?php 
 
  include_once "../includes/connection.php";
     
  if(!isset($_SESSION['name'])){
    exit();
    header("location: login.php");
  }
  
?>
<?php include_once "header.php"; ?>
<body>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
    
        <img src="../admin/upload/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['name'] ?></span>
          <?php  if(isset( $_SESSION['mode']) &&  $_SESSION['mode']=='trainer'){?>
          <button type="button" class="btn btn-success ml-4" data-toggle="modal" data-target="#myModal">Make offer</button>
        <?php  } ?>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Discount offer</h4>
        </div>
        <div class="modal-body">
       
  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Amount (in DOLLAR)</label>
    <div class="input-group">
      <div class="input-group-addon">DOLLAR</div>
      <input type="text" value="<?php  echo $_GET['user_id'] ?>"  id="member_id" hidden="">

      <input type="number" min="0.00" step="0.05"  id="Discount" class="form-control" placeholder="Price">
    </div>
    <div class="input-group">
      
      <button class="btn btn-success mt-3" onclick="discount()">SEND OFFER</button>
    </div>
  </div>
</form> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
         
        </div>
      </header>
      <div class="chat-box">

      </div>
     
      <form action="#" class="typing-area">
        
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>

        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off" id="msg">
        <button><i class="fab fa-telegram-plane" id="msgbtn"></i></button>
      </form>
    </section>
  </div>

<script>
 function discount() {
var member_id=document.getElementById('member_id').value;
var Discount=document.getElementById('Discount').value;
$.ajax({
  method: "POST",
  url: "php/discount.php",
  data: { discount:Discount,member_id:member_id }
})
  .done(function( response ) {
       document.getElementById('msg').value=`<a href='../checkout.php?member_id=${member_id}'>Click to get Discount</a>`;
       document.getElementById('msgbtn').click();
  });
         
       } 
</script>
  <script src="javascript/chat.js"></script>

</body>
</html>
