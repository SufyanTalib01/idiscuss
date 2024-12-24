<?php require 'components/_dbconnects.php';  ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>idiscuss</title>


</head>

<body>
    <!-- NAV  -->
    <?php require 'components/_nav.php'; ?>

    <!-- CAROUSEL  -->
    <div class="container-fluid px-0" style="height: 400px; overflow: hidden;">
        <div id="carouselExampleControls" style="height: 100%;" class="carousel slide" data-ride="carousel ">
            <div class="carousel-inner h-100">  
                <div class="carousel-item active h-100">
                    <img class="d-block w-100 h-100 object-fit-contain"
                        src="https://plus.unsplash.com/premium_photo-1733864821625-8c5914eb183e?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="First slide">
                </div>
                <div class="carousel-item h-100">
                    <img class="d-block w-100 h-100 object-fit-contain"
                        src="https://plus.unsplash.com/premium_photo-1733864821625-8c5914eb183e?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Second slide">
                </div>
                <div class="carousel-item h-100">
                    <img class="d-block w-100 h-100 object-fit-contain"
                        src="https://plus.unsplash.com/premium_photo-1733864821625-8c5914eb183e?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <!-- CATEGORIES  -->
    <div class="container">
        <h3 class="text-center my-3">I-DISCUSS WEBSITE</h3>
        <div class="row">
            
            <?php 
            $sql = "SELECT * FROM `categories`";
            $result = mysqli_query($connection , $sql);
            // $num = mysqli_num_rows($result);
                while($row = mysqli_fetch_assoc($result)){
                    echo '<div class="col-md-4">
                    <div class="card my-3" style="width: 18rem;">
                        <img class="card-img-top"
                        src="https://media.istockphoto.com/id/1804857934/photo/software-program-source-code-of-python-ide-code-editor-display-photo.jpg?s=1024x1024&w=is&k=20&c=Bum7cGyE7KtZH8h8uIM2ZX4crJ3vPliNjE4Uy37lTJE="
                        alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title"> <a href="threadslist.php?categoryid='.$row['category_id'] .' ">'. $row['category_name'] .'</a>  </h5>
                        <p class="card-text">'. substr($row['category_description'] , 0 ,100) .'...</p>
                        <a href="/threadslist.php?categoryid='.$row['category_id'].'" class="btn btn-primary">view thread</a>
                        </div>
                    </div>
                </div>';
                }
            ?>
        </div>
    </div>

    <!-- Footer  -->
    <?php require 'components/_footer.php'; ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>