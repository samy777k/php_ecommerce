<?php
include_once('../connection.php');
include_once('style.php');
if(!empty($_POST['search'])){
    $search=$_POST['search'];
}else{
    $search='_';
}
$query="SELECT * FROM category,store where id = category_id AND name like '%$search%'";
$result=mysqli_query($connection,$query);


?>
<!DOCTYPE html>
<html lang="en">
    <head>
   
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Shoping</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" action="" method="POST">
                        <input type="text" name="search" placeholder="search">
                        <button class="btn btn-primary" type="submit">
                            Search
                        </button>
                    </form>
                    
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">ALL CATEGORY</h1>
                    <p class="lead fw-normal text-white-50 mb-0">SHOW ALL CATEGORY</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    
                    <?php
                   
                   if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        if($row['status']==1){
                            $status="<span class='badge badge-success'> Active </span>";
                        }else{
                            $status="<span class='badge badge-danger'> block </span>";
                        }
                  echo   
                    "<div class=col mb-5>
                        <div class=card h-100>
                            <!-- Product image-->
                            <img class=card-img-top height='200px' max-height='200px' src=http://localhost/project2/" . $row['discription'] . "  alt=... />
                            <!-- Product details-->
                            <div class=card-body p-4>
                                <div class=text-center>
                                    <!-- Product name-->
                                    <h5 class=fw-bolder>" . $row['name'] . "</h5>
                                    <!-- Product price-->
                                    " . $status . "
                                </div>
                               
                                </div>
                            <!-- Product actions-->
                            <div class=card-footer p-4 pt-0 border-top-0 bg-transparent>
                            
                                <div class=text-center><a class=btn btn-outline-dark mt-auto href=view.php?id=".$row['id']."&&store=".$row['store_id'].">View options</a></div>
                                
                                </div>
                        </div>
                    </div>";
                    }
                }
            
                ?>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

       

    </body>
</html>
