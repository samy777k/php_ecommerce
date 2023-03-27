<?php
session_start();
if(isset($_SESSION['is_login']) and $_SESSION['is_login']){
}else{
  header('location: Login/login.php');
}
?>

<?php
include_once('connection.php');

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
    
       
      
    $query ="INSERT into admin (username,password ,name,phone,status,address,discription) values ('$userN' , '$pass' , '$name' , '$phone' ,
     '$status' , '$address' , '$disc')";
$result =mysqli_query($connection,$query);
if($result){
    header('location: newAdmin.php');
}

}
?>