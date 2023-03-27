<?php
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
    $query3= "DELETE FROM store WHERE store_id = $id";
    $result3=mysqli_query($connection,$query3);
    if($result3){
        header('location:showStore.php');
    }
}

?>