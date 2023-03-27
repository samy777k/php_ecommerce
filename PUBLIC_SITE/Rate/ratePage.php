<?php
include_once('../../connection.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Home - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
    </head>
    <body>
        <!-- Responsive navbar-->
        
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Rating</h1>
                   
                </div>
            </div>
        </header>
       
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                    <?php
                   $query="SELECT * FROM store where store_id=". $_GET['id'];
                   $result=mysqli_query($connection,$query);
                   if(mysqli_num_rows($result)>0){
                    $row=mysqli_fetch_assoc($result);
                    echo"<a href=#!><img class=card-img-top src=http://localhost/project2/" . $row['store_image'] . " alt=... /></a>";                   
                   }
                        ?>
                        <div class="card-body">
                            <h2 class="card-title">The Store Name : <?php echo $row["store_name"]; ?></h2>
                            <h3 class="card-text"><?php echo $row['store_phone']; ?></h3>
                            <h3 class="card-text"><?php echo $row['store_address']; ?></h3>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    
                    <!-- Pagination-->
                   
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Rate</div>
                        <div class="card-body">
                            <div class="input-group">
                                
                           <?php
                           echo "<form action=rate.php method=GET>
                           <label for=star-rating-1 class=control-label>Stars Rating:</label>
                           <input id=star-rating-1 name=star-rating class=rating rating-loading value=0 data-min=0 data-max=5 data-step=0.5 data-size=xs>
                            <input type=hidden name=store value=".$row['store_id'].">
                           <button type=submit>Ok</button>
                                 </form>";
                           ?>
                                
                           
                        </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                   
                    <!-- Side widget-->
                   
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script>
$("#star-rating-1").rating();
</script>

    </body>
</html>
