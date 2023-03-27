<?php

$connection=mysqli_connect('localhost','root','','project2');
if(!$connection){
    die("error " .mysqli_connect_error());
}

session_start();

session_unset();

session_destroy();
$query3= "DELETE FROM this_login";
$result3=mysqli_query($connection,$query3);
if($result3){
header('location: http://localhost/project2/Login/');
}

?>