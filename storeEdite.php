<?php

include_once('connection.php');

?>

<?php

include_once('storeUpdate.php');

?>
<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query4= "SELECT * FROM store where store_id=$id";
$result4=mysqli_query($connection,$query4);
if(mysqli_num_rows($result4)>0){
$row=mysqli_fetch_assoc($result4);
}
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

  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <?php

  include_once('sidepar.php');

  ?>
  
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
      <div class="col-md-9">
			<div class="card" style="height: 1025.1px;">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-square-controls">Add New Store</h4>
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
						<form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] . "?id=$id" ?>" enctype="multipart/form-data">
							<div class="form-body">

								<div class="form-group">
									<label for="donationinput1">Name</label>
									<input type="text" id="donationinput1" value="<?php echo $row['store_name'] ?>" class="form-control square" placeholder="name" name="store-name">
									<?php
                      if(!empty($errors['name'])){
                        echo "<span class= text-danger>" .$errors['name']."</span>";
                      }
?>
								</div>

								<div class="form-group">
									<label for="donationinput2">Adress</label>
									<input type="text" id="donationinput2" value="<?php echo $row['store_address'] ?>" class="form-control square" placeholder="address" name="store-address">
									<?php
                      if(!empty($errors['address'])){
                        echo "<span class= text-danger>" .$errors['address']."</span>";
                      }
?>
								</div>

								<div class="form-group">
									<label for="donationinput3">Phone</label>
									<input type="tel" id="donationinput3" value="<?php echo $row['store_phone'] ?>" class="form-control square" name="store-phone">
									<?php
                      if(!empty($errors['phone'])){
                        echo "<span class= text-danger>" .$errors['phone']."</span>";
                      }
?>
								</div>

								<div class="form-group">
									<label for="donationinput4">Image</label>
									<input type="file" id="donationinput4" class="form-control square" name="store-img">
	

								</div>

								<div class="form-group">
									<label>Category</label>
									<div class="input-group mt-0">
                                    <select name="store-category" class="form-control">
	
									<?php 
									$query2="SELECT * FROM category WHERE status=1";
    								$result2=mysqli_query($connection,$query2);
   									 if(mysqli_num_rows($result2)>0){
   									 while($row=mysqli_fetch_assoc($result2)){
										echo "<option value=". $row['id'] .">".$row['name']."</option>";
  									  }
								}
?>
                    </select>
					
								</div>

							</div>

							<div class="form-actions right">
								<button type="button" class="btn btn-warning mr-1">
									<i class="ft-x"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary">
									<i class="la la-check-square-o"></i> Save
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
  </div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
 <?php
include_once('footer.php');
 ?>
</body>

</html>