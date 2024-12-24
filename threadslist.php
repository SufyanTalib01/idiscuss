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

    <title>Threads</title>
</head>

<body>
    <?php require 'components/_nav.php'; ?>

    <div class="container my-3">

        <?php 
            $cat_id = $_GET['categoryid'];
            $sql = "SELECT * FROM `categories` WHERE `category_id` = $cat_id;";
            $result = mysqli_query($connection , $sql);

            $row = mysqli_fetch_assoc($result);
            
            echo '<div class="jumbotron">
            <h1 class="display-4">Welcome to '. $row['category_name'] .' forum</h1>
            <p class="lead">' . $row['category_description'] .'</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn    btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>';
        ?>



    </div>

    <!-- FORM  -->

    <?php
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $questionTitle = $_POST['questiontitle'];
            $questionDesc = $_POST['questiondesc'];

            $sql = "INSERT INTO `threads_questions` (`threads_questions_title`, `threads_questions_description`, `threads_questions_date_time`) VALUES ('$questionTitle', '$questionDesc',)";

            $result = mysqli_query($connection , $sql);

        }
        
    ?>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label for="questiontitle">Title</label>
                <input type="text" class="form-control" id="questiontitle" name="questiontitle" aria-describedby="emailHelp"
                    placeholder="Title">
                
            </div>
            <div class="form-group">
                <label for="questiondesc">Description</label>
                <textarea rows="3" type="text" class="form-control" name="questiondesc" id="questiondesc" placeholder="Description"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- QUESTIONS  -->
    <div class="container">
        <h2 class="my-3">Browse Questions</h2>
        <div class="media my-2">
            <img class="mr-3" src="/images/user.jpg" width="50" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">Media heading</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>
        <div class="media my-2">
            <img class="mr-3" src="/images/user.jpg" width="50" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">Media heading</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>
        <div class="media my-2">
            <img class="mr-3" src="/images/user.jpg" width="50" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">Media heading</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>
    </div>

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