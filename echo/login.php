<?php

// 2  so many time 10.00
session_start();
//so many time 10.00

 //1.login korar jono
include ('incload.php');
$login_name = $_POST['lname'];
$login_pass =     $_POST['lpass'];

 $conn_umail_upass = mysqli_query ($conn,"SELECT* FROM user_id WHERE mobile_email = '$login_name' AND passwoed ='$login_pass'");

$uner_num = mysqli_num_rows ($conn_umail_upass);
//2.nam pocter alada korar jono
  $user_tukra = mysqli_fetch_array($conn_umail_upass);

 //1.login korar jono
if($uner_num == 1 ){
    
//2.nam pocter alada korar jono
 $_SESSION['first'] =  $user_tukra ['first_name'] ;
 $_SESSION['last'] =  $user_tukra['last_name'];
 $_SESSION['image'] = $user_tukra['p_pi'];



 
 //1.login korar jono


 header("location:../home/admin.php");
} else {
   header("location:../index.php?result=email_not_same");

}



?>