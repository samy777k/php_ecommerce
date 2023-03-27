<?php
session_start();
if(isset($_SESSION['is_login']) and $_SESSION['is_login']){
}else{
  header('location: Login/login.php');
}
?>
<?php
include_once('connection.php');
$errors=[];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $store_name=$_POST['store-name'];
    $store_address=$_POST['store-address'];
    $store_phone=$_POST['store-phone'];
    $store_category=$_POST['store-category'];
       if(empty($store_name)){
           $errors['name']="pleze fill name record";
       }
       if(empty($store_address)){
           $errors['address']="pleze fill address record";
       }if(empty($store_phone)){
        $errors['phone']="pleze fill phone record";
    }

            $file_name=$_FILES['store-img']['name'];
        $file_tmp=$_FILES['store-img']['tmp_name'];
        $file_ext=strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
    
        $file_new_name = strval(time() + rand(1,10000)) . ".$file_ext";
        $upload_path = "PUBLIC_SITE/images/". $file_new_name;
        move_uploaded_file($file_tmp , $upload_path);
    $query ="INSERT INTO store (store_name,store_phone,store_image,category_id,store_address) values ('$store_name' , '$store_phone' , '$upload_path' , '$store_category' , '$store_address')";
$result =mysqli_query($connection,$query);

}



?>