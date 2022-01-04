<?php
include ('incload.php');
session_start() ;

 $username = $_SESSION ['first'] .' '. $_SESSION ['last'] ;
 $userpic = $_SESSION ['image'] ;
 $postdate = date('F-d-Y  g:m:a');
  $post_con = $_POST['postcont'];
  $post_image = $_FILES['postimage'] ['name'] ;
         $post_tmp_n = $_FILES['postimage'] ['tmp_name'] ;
   move_uploaded_file ($post_tmp_n,'../postimage/'.$post_image);

  if($post_con || $post_image ){



    mysqli_query  ($conn,"INSERT INTO user_(use_name,user_pic,pos_date,pos_content,pos_image) VALUES('$username','$userpic','$postdate','$post_con','$post_image')");
    
    header('location:../home/admin.php');
   

  }else{
      header('location:../home/admin.php');
  }

?> 