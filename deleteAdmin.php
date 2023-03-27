<?php
include_once('Login/style.php');
session_start();
if(isset($_SESSION['is_login']) and $_SESSION['is_login']){
}else{
  header('location: Login/login.php');
}
?>

<?php
include_once('connection.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id=$_POST['id'];
    $query0="SELECT * FROM this_login WHERE id_Admin = $id";
    $result0=mysqli_query($connection,$query0);
    if(mysqli_num_rows($result0)>0){
    $query3= "DELETE FROM admin WHERE id = $id";
    $result3=mysqli_query($connection,$query3);
    if($result3){
        header('location:showAdmin.php');
    }
}else{
    echo ' <div class="row"> <div class="col-12"> <div class="alert alert-danger"> You Dont Suppose Delete This Admin Becuase Not You </div></div> </div>';
}
}
?>