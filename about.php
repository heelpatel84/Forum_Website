<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
    .container {
        min-height: 87vh;
    }
    </style>
    <title>About Us - Coding Forums</title>
</head>
<body>
    <?php include 'partials/dbconnect.php';?>
    <?php include 'partials/_header.php';?>

    <div class="container my-3">
        <h1 class="text-center">About Us</h1>
        <div class="jumbotron">
            <h2 class="display-4">Welcome to Coding Forums!</h2>
            <p class="lead">Coding Forums is a peer-to-peer platform where programmers of all skill levels can share their programming problems and get help from the community. Whether you are a beginner or an experienced developer, our forums provide a space for you to ask questions, share knowledge, and improve your coding skills.</p>
            <hr class="my-4">
            <p>On Coding Forums, you can:</p>
            <ul>
                <li>Post your programming problems and get solutions from other members.</li>
                <li>Comment on posts to provide help or ask for clarifications.</li>
                <li>Browse through various categories to find discussions relevant to different programming languages.</li>
                <li>Connect with fellow coders and build a network of like-minded individuals.</li>
            </ul>
            <p>We believe in the power of community and the importance of helping each other to grow as developers. Join us today and be a part of this vibrant community!</p>
            <a class="btn btn-success btn-lg" href="index.php" role="button">Go to Forums</a>
        </div>
    </div>

    <?php include 'partials/_footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
