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
    $thread_id = $_GET['threadid'];
    $sql = "SELECT * FROM `threads_questions` WHERE `threads_questions_id` = $thread_id";
    $result = mysqli_query($connection , $sql);

    while($row = mysqli_fetch_assoc($result)){
        echo '<div class="jumbotron">
            <h1 class="display-4"> ' . $row['threads_questions_title'] .' </h1>
            <p class="lead"> ' . $row['threads_questions_description'] .' </p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn    btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
            </div>';
    }
    
    ?>

    </div>

    

    <!-- FORM  -->

    

    <!-- QUESTIONS  -->
    

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