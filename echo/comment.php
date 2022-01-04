<?php
include ('incload.php');
session_start() ;

echo  $username = $_SESSION ['first'] .' '. $_SESSION ['last'] ;
echo  $userpic = $_SESSION ['image'] ;

echo $comment = $_POST ['usercomment'] ;
echo  $post_id = $_POST ['postid'] ;

if($comment){

 
    mysqli_query  ($conn,"INSERT INTO user_commend(user_nam,user_pic,comment_text,post_id) VALUES('$username','$userpic','$comment','$post_id')");
    
    header('location:../home/admin.php');
} else{
    header('location:../home/admin.php');   }

  ?>