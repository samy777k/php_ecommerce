<?php
session_start();
if(isset($_SESSION['is_login']) and $_SESSION['is_login']){
}else{
  header('location: Login/login.php');
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
                                <h4 class="card-title">All Categories </h4>
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
                                            <th> Name</th>
                                            <th> userName</th>
                                            <th> Phone</th>
                                            <th> Address</th>
                                            <th> Discription</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>DELETE</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
$query2= "SELECT * FROM admin";
$result2=mysqli_query($connection,$query2);
if(mysqli_num_rows($result2)>0){
    while($row=mysqli_fetch_assoc($result2)){
        if($row['status']==1){
            $status="<span class='badge badge-success'> Active </span>";
        }else{
            $status="<span class='badge badge-danger'> block </span>";
           
        }
   echo "<tr>" . "<td>" . $row['id'] . "</td>" . "<td>" . $row['name'] . "</td>" . "<td> " . $row['username'] . "</td>"
    ."<td>" . $row['phone'] . "</td>" . "<td>" . $row['address'] . "<td>" . $row['discription'] . "</td>" . "<td>" . $status . "</td>" .  "<td> <a href='editAdmin.php?id=".$row['id']."' class='btn btn-outline-primary  box-shadow-3 mr-1 mb-1'><i
            class='icon-eye'></i></a>
</td>" .
"<td>
    <form action='deleteAdmin.php' method='post' id='form-script' class='form-delete'>
        <input type='hidden' name='id' value='".$row['id']."'>
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