<?php

  // Database Connection 
  include ('incload.php');
//$conn = mysqli_connect('localhost','root','','foysal');



//all valuse
  $first_nam = $_POST['fname'];
 $last_nam = $_POST['tsure'];   
 $mobile_emai = $_POST['mobile'];
      $remobile_emai =  $_POST['remobile'];


 $passwoe =  $_POST['newpass'];
     $checkpass =   $_POST['newpass_check'];

             $_POST['day'];
             $_POST['month'];
             $_POST['year'];
 $birthda = $_POST['day'].'/'.$_POST['month'].'/'.$_POST['year'];


//mysqli_query($conn, "INSERT INTO user info   pictur

 $p_pic = $_FILES ['ppp'] ['name'];
     $ptmp_name = $_FILES ['ppp'] ['tmp_name'];
              move_uploaded_file ($ptmp_name,'../upload/'.$p_pic);


 $gende = $_POST['same'];






// no:1 1ta email ekbar use kora jibo
if ($passwoe == $checkpass) {

  if ($mobile_emai == $remobile_emai) {

//....................................................
   // no:2 same email na houar jino you have a accunt
$email_same = mysqli_query ($conn,"SELECT * FROM user_id WHERE mobile_email = '$mobile_emai' " );
$email_num = mysqli_num_rows($email_same);
 // no:2 same email na houar jino   you have a account
 if($email_num >= 1 ) {

  header("location:../index.php?result=alredy_account");
   //  echo "Already you have a account"  ;
   //close connection  very importent
   mysqli_close($conn) ;
  
 }
 else{
  //no:3 same email na houar jino you have a password

  ///if ($passwoe == $checkpass) {

    // Sql Query
//mysqli_query ($conn, "INSERT INTO user_info 
  mysqli_query  ($conn,"INSERT INTO user_id(first_name,last_name,mobile_email,passwoed,birthday,p_pi,gender) VALUES('$first_nam','$last_nam','$mobile_emai','$passwoe','$birthda','$p_pic','$gende')");
  //no:3 same email na houar jino you have a password
//}else{
  

  //header("location:../index.php?result=passwoed_not_same");
 // echo "email not same";
  //mysqli_close($conn) ;

//}
  header("location:../index.php?result=account_sucessfull");

 // no:2 same email na houar jino   you have a account
 }

}else{
  

  header("location:../index.php?result=email_not");
 // echo "email not same";
  mysqli_close($conn) ;
}

// no:1 1ta email ekbar use kora jibo 
}else{
  

  header("location:../index.php?result=pass_not_same");
 // echo "email not same";
  mysqli_close($conn) ;
}







