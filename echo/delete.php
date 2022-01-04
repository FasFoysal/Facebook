<?php
session_start();
include('incload.php');

if(isset($_GET['del'])){
    $delpostid = $_GET['del'];
    mysqli_query($conn, "DELETE FORM user_ WHERE post_id = '$delpostid' ");
    echo ' <script type="text/javascript">alert("Your post delete succesfull")</script>';
    echo '<script type="text/javascript" >window.open("../home/home.php","_self")</script>';

}








?>