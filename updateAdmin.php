<?php
session_start();
if(isset($_SESSION['is_login']) and $_SESSION['is_login']){
}else{
  header('location: Login/login.php');
}
?>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $userN=$_POST['userN'];
    $pass=$_POST['pass'];
    $phone=$_POST['phone'];
    $disc=$_POST['disc'];
    $address=$_POST['address'];
    if(isset($_POST['status'])){
        $status=$_POST['status'];
    }else{
        $status=0;
    }
    $id=$_GET['id'];
    $query0="SELECT * FROM this_login WHERE id_Admin = $id";
    $result0=mysqli_query($connection,$query0);
    if(mysqli_num_rows($result0)>0){
    $query1 ="UPDATE admin set name='$name' , username= '$userN' , password= '$pass' , phone= '$phone' , 
    address= '$address' , discription= '$disc' ,  status= '$status'
    where id='".$_GET['id']."'
    ";
    $result =mysqli_query($connection,$query1);
    if($result){
        header('location:showAdmin.php');
    }
}
}





?>