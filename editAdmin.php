<?php
include_once('connection.php');
?>
<?php
include_once('updateAdmin.php');

?>
<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];
$query2= "SELECT * FROM admin where id=$id";
$result2=mysqli_query($connection,$query2);
$row=mysqli_fetch_assoc($result2);
}
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
      <div class="col-md-6">
			<div class="card" style="">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Admin</h4>
					<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
					<div class="card-body">
					<?php
					$query0="SELECT * FROM this_login WHERE id_Admin = $id";
    $result0=mysqli_query($connection,$query0);
    if(mysqli_num_rows($result0)>0){
		?>
						<form class="form" action= "<?php echo $_SERVER['PHP_SELF'] . "?id=$id" ?>" method="POST">
                         
							<div class="form-body">
								<h4 class="form-section"> Edit Admin</h4>

								<div class="row">
                                <div class="col-md-6">
										<div class="form-group">
											<label for="projectinput1">Name</label>
											<input type="text" id="projectinput1" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Name" name="name">
                     
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput2">userName</label>
											<input type="text" placeholder="userName" value="<?php echo $row['username'] ?>" id="projectinput2" class="form-control" name="userN">
										</div>
									</div>

                                    <div class="col-md-6">
										<div class="form-group">
											<label for="projectinput1">password</label>
											<input type="text" id="projectinput1" value="<?php echo $row['password'] ?>" class="form-control" placeholder="password" name="pass">
                     
										</div>
									</div>

                                    <div class="col-md-6">
										<div class="form-group">
											<label for="projectinput1">Phone</label>
											<input type="text" id="projectinput1" value="<?php echo $row['phone'] ?>" class="form-control" placeholder="Phone" name="phone">
                     
										</div>
									</div>

                                    <div class="col-md-6">
										<div class="form-group">
											<label for="projectinput1">Discription</label>
											<input type="text" id="projectinput1" value="<?php echo $row['discription'] ?>" class="form-control" placeholder="discription" name="disc">
                     
										</div>
									</div>

                                    <div class="col-md-6">
										<div class="form-group">
											<label for="projectinput1">Address</label>
											<input type="text" id="projectinput1" value="<?php echo $row['address'] ?>" class="form-control" placeholder="address" name="address">
                     
										</div>
									</div>
								</div>

					      
							
                <div class="col-md-6">
								<div class="form-group">
									<label >status</label>
									<input type="checkbox" name="status" value=1 
                                    <?php
                                    if($row['status']==1){
                                        echo 'checked';
                                    }
                                    ?>
                                    >
									<?php
	}
									?>

                </div>
								</div>
							</div>

							<div class="form-actions">
								<button type="button" class="btn btn-warning mr-1">
									<i class="ft-x"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary">
									<i class="la la-check-square-o"></i> Edit
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
 <?php
include_once('footer.php');
 ?>
</body>

</html>