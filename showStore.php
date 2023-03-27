<?php
session_start();
if(isset($_SESSION['is_login']) and $_SESSION['is_login']){
}else{
  header('location: Login');
}
?>
<?php
include_once('connection.php');
// $limit=3;
// $page=$_GET['page'] ??=1
// $offset=($page-1)*$limit;
// $query="SELECT * FROM category WHERE status=1 ORDER BY DESC LIMIT $limit offset $offset";
// $result=mysqli_query($connection,$query);

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">



<?php
include_once('header.php');

?>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern"
  data-col="2-columns">
  <?php
  include_once('nav.php');
  
  ?>
  <!-- fixed-top-->
  
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?php
  include_once('sidepar.php');
  ?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
      <section id="dom">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Store </h4>
                                <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table style="width: 100%"
                                           class="table display nowrap table-striped table-bordered scroll-horizontal ">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Store</th>
                                            <th> Category</th>
                                            <th>Image</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                           
                                            <th>Edit</th>
                                            <th>DELETE</th>

                                        </tr>
                                        </thead>
                                        <tbody>


   <?php
   # "<td>" . $row['numberRate'] . "</td>" . "<td>" . $row['overallRate'] . "</td>"
$query2= "SELECT * FROM store,category WHERE id = category_id";
$result2=mysqli_query($connection,$query2);
if(mysqli_num_rows($result2)>0){
    while($row=mysqli_fetch_assoc($result2)){
        
   echo "<tr>" . "<td>" . $row['store_id'] . "</td>" . "<td>" . $row['store_name'] . "</td>"
  
    . "<td>" . $row['name'] . "</td>" . "<td> <img width=100px src=http://localhost/project2/". $row['store_image'] .">" . "</td>" . "<td>" . $row['store_phone'] . "</td>"
    . "<td>" . $row['store_address'] . "</td>"   
    .  "<td> <a href='storeEdite.php?id=".$row['store_id']."' class='btn btn-outline-primary  box-shadow-3 mr-1 mb-1'><i
            class='icon-eye'></i></a>
</td>" .
"<td>
    <form action='deleteStore.php' method='post' id='form-script' class='form-delete'>
        <input type='hidden' name='id' value='".$row['store_id']."'>
        <button type='submit' class='btn btn-danger btn-delete ' id='delete-btn'>
            DELETE
        </button>
    </form>
</td>";
}
}
   
                               ?>
                              
                                        </tbody>
                                    </table>

                                    <h2>Rating</h2>
                                    <table style="width: 50%"
                                           class="table display nowrap table-striped table-bordered scroll-horizontal ">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Store</th>
                                            <th>Preview</th>
                                            <th>Rate</th>
                                        

                                        </tr>
                                        </thead>
                                        <tbody>


   <?php
   # "<td>" . $row['numberRate'] . "</td>" . "<td>" . $row['overallRate'] . "</td>".
$query2= "SELECT * FROM store,rate WHERE store_id2 = store_id";
$result2=mysqli_query($connection,$query2);
if(mysqli_num_rows($result2)>0){
    while($row=mysqli_fetch_assoc($result2)){
        
   echo "<tr>" . "<td>" . $row['store_id'] . "</td>" . "<td>" . $row['store_name'] . "</td>"
  
    ."<td>" . $row['numberRating'] . "</td>" . "<td>" . $row['overallRate']. "%" ."
</td>" ;

}
}
   
                               ?>
                               
                                        </tbody>
                                    </table>
                                 




                                    <div class="justify-content-center d-flex">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
 <?php
include_once('footer.php');
 ?>
</body>
<script>
    $('.btn-delete').click(function(event){
        var result=confirm("Are You Sure");
        if(result==true){
            $('.form-delete').submit();
        }

    });
</script>

</html>