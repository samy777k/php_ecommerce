<?php
session_start();
if(isset($_SESSION['is_login']) and $_SESSION['is_login']){
}else{
  header('location: Login/login.php');
}
?>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['store-name'];
    $address=$_POST['store-address'];
    $phone=$_POST['store-phone'];
    $file_name=$_FILES['store-img']['name'];
    $file_tmp=$_FILES['store-img']['tmp_name'];
    $file_ext=strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
    $file_new_name = strval(time() + rand(1,10000)) . ".$file_ext";
    $upload_path = "PUBLIC_SITE/images/"."$file_new_name";
    move_uploaded_file($file_tmp , $upload_path);
    $category=$_POST['store-category'];
    $query ="UPDATE store set store_name='$name' , store_address= '$address' , store_phone= '$phone' , store_image='$upload_path' , category_id	='$category'
    where store_id='".$_GET['id']."'
    ";
    $result =mysqli_query($connection,$query);
    if($result){
        header('location:showStore.php');
    }
}





?>