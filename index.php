<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        #ques{
            min-height: 433px;
        }
    </style> 
    <title>Welcome To iDiscuss - Coding Forms</title>
</head>

<body>
    <?php include 'partials/_header.php' ?>
    <?php include 'partials/dbconnect.php'?>
    <!--slider start here-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slide-2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/slide-1.jpg"
                    alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slide-3.jpg"
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
     <!-- Category container start here -->
    <div class="container my-4" id="ques">
        <h2 class="text-center">iDiscuss - Browse Categories</h2>
        <div class="row">
            <!-- Fetch All the Categories -->
            <!-- Use for loop to iterate through categories -->
            <?php
            $sql = "SELECT * FROM `categories`";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $cat = $row["category_name"];
                $desc = $row["category_description"];
                $id = $row["category_id"];
                echo '<div class="col-md-4 my-2">
                    <div class="card" style="width: 18rem; margin:10px;">
                        <img class="card-img-top" src="https://picsum.photos/400/200?random=' . $id . '" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><a href="threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                            <p class="card-text">' . substr($desc, 0, 90) . '...</p>
                            <a href="threadlist.php?catid=' . $id . '" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
    <?php include 'partials/_footer.php' ?>

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