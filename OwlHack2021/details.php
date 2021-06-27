<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Empower</title>
    </head>
    <style>

        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            text-align: center;
        }

        #title {
            margin-top: 50px;
            margin-bottom: 25px;
            text-align: center;
            font-size: 70px;
        }

    </style>
    <body>
    <!-- <div class="container-fluid" id="title">
        <h1>Title</h1>
    </div> -->

    <?php
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "owlhack2021";
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die ("Connect failed: %s\n". $conn -> error);

        $id = $_GET["id"];

        $select_query = "SELECT * FROM cards WHERE id=$id";
        $selected_rows = $conn->query($select_query);
        $row = $selected_rows->fetch_row();

        $title = $row["title"];
        $description = $row["description"];
        $id = $row["id"];
        $first = $row["first"];
        $last = $row["last"];
        $date = $row["date"];
        $time = $row["time"];
        $requirements = $row["requirements"];
        $rewards = $row["rewards"];
        $image = $row["image"];

    ?>

    <div class="card mb-3">
        <img class="card-img-top" src="<?php echo $image ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>