<?php
    $output="";
        $teacher_id=$_SESSION['unique_id'];
        $sql="SELECT * FROM `msg_person` WHERE `trainer_id`='$teacher_id'";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
           while ($row=mysqli_fetch_assoc($result)) {
          
        $u_id=$row['member_id'];
        $sql2 = "SELECT * FROM `users`  where `unique_id`='$u_id' ORDER BY `user_id` DESC;";
        $query2 = mysqli_query($conn, $sql2);
          if ($query2->num_rows > 0) {
           while ($row=mysqli_fetch_assoc($query2)) {
        $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                    <img src="../admin/upload/'. $row['img'] .'" alt="">
                    <div class="details">
                        <span>'. $row['name'].'</span>
                    </div>
                    </div>
                   
                </a>';

           }

}}

         }
    
?>