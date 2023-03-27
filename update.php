<?php
session_start();
if(isset($_SESSION['is_login']) and $_SESSION['is_login']){
}else{
  header('location: Login/login.php');
}
?>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['c_name'];
    $file_name1=$_FILES['c_img']['name'];
    $file_tmp1=$_FILES['c_img']['tmp_name'];
    $file_ext1=strtolower(pathinfo($file_name1,PATHINFO_EXTENSION));
    $file_new_name1 = strval(time() + rand(1,10000)) . ".$file_ext1";
    $upload_path1 = "PUBLIC_SITE/images/"."$file_new_name1";
    move_uploaded_file($file_tmp1 , $upload_path1);
    if(isset($_POST['status'])){
        $status=$_POST['status'];
    }else{
        $status=0;
    }
    
    $query1 ="UPDATE category set name='$name' , discription= '$upload_path1' , status= '$status'
    where id='".$_GET['id']."'
    ";
    $result =mysqli_query($connection,$query1);
    if($result){
        header('location:show.php');
    }
}





?>