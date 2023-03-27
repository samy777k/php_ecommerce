<?php
include_once('../../connection.php');
include_once('../../Login/style.php');
?>

<?php
$rate=$_GET['star-rating'];
    if($_GET['star-rating']==0.5){
        $overal=10;
    }elseif($_GET['star-rating']==1){
        $overal=20;
    }elseif($_GET['star-rating']==1.5){
        $overal=30;
    }elseif($_GET['star-rating']==2){
        $overal=40;
    }elseif($_GET['star-rating']==2.5){
        $overal=50;
    }elseif($_GET['star-rating']==3){
        $overal=60;
    }elseif($_GET['star-rating']==3.5){
        $overal=70;
    }elseif($_GET['star-rating']==4){
        $overal=80;
    }elseif($_GET['star-rating']==4.5){
        $overal=90;
    }elseif($_GET['star-rating']==5){
        $overal=100;
}
$store_id=$_GET['store'];

        $query ="INSERT into rate (overallRate,numberRating ,store_id2) values ('$overal' , '$rate' , '$store_id')";
        $query2="INSERT INTO is_rate(storeID) values ('$store_id')";
        $result =mysqli_query($connection,$query);
        $result2=mysqli_query($connection,$query2);
        if($result){
            header('location: ../index.php');
        }

      
    

       
?>