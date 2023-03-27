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
    $name=$_POST['c_name'];
    if(isset($_POST['status'])){
        $status=$_POST['status'];
    }else{
        $status=0;
    }
    $date=Date("y-m-d h:i:s");
       if(empty($name)){
           $errors['name']="pleze fill name record";
       }
        $file_name=$_FILES['c_img']['name'];
        $file_tmp=$_FILES['c_img']['tmp_name'];
        $file_ext=strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
    
        $file_new_name = strval(time() + rand(1,10000)) . ".$file_ext";
        $upload_path = "PUBLIC_SITE/images/". $file_new_name;
        move_uploaded_file($file_tmp , $upload_path);
    $query ="INSERT into category (name,discription ,status,date) values ('$name' , '$upload_path' , '$status' , '$date')";
$result =mysqli_query($connection,$query);


}
?>