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
            margin-bottom: -50px;
            text-align: center;
        }

        h1 {
            font-size: 70px;
            margin-bottom: 75px;
        }

        input {
            display: block;
            margin: auto;
        }

        .enterText {
            width: 450px;
            height: 65px;
            margin-bottom: 30px;

            outline: none;

            font-size: 25px;
            padding-left: 10px;

            border: 2px solid black;
        }

        ::placeholder {
            color: #575757;
        }

        #signinData {
            text-align: center;
        }


        input[type="submit"] {
            margin-top: 65px;
            outline: none;

            font-weight: bold;
            font-size: 25px;

            background-color: #007bffc4;
            color: #ffffff;

            width: 300px;
            height: 45px;
        }

        input[type="submit"]:hover {
            cursor: pointer;
            box-shadow: 0 9px #aaa;
            background-color: #007bffff;
        }

        input[type="submit"]:active {
            box-shadow: 0 5px #777;
        }

        #description {
            border: 2px solid black;
            font-size: 20px;
            height: 175px;
            pad: 50px;
        }

        #createContainer {
            width: 450px;
            text-align: center;
            margin-top: 20px;

            font-size: 20px;
        }

        a {
            font-weight: bold;
        }

        u {
            font-weight: normal;
            color: black;
        }

        #addContainer {
            text-align: right;
        }

        #add {
            margin-top: 15px;
            width: 200px;
            font-size: 20px;
            margin-left: 20px;
            border: 2px solid black;
        }

        label {
            font-size: 25px;
            position: relative;
            left: -170px;
        }
        
        #submitContainer {
            border: 2px solid black;
            padding: 10px;

            width: 450px;
            font-size: 20px;

            text-align: left;

            padding-left: 10px;
        }

        #customFile {
            border: none;
            padding-left: 0;
        }

        .name {
            display: inline;
            width: 213px;
        }

        

    </style>
    <body>

    <div class="container-fluid fixed-top" id="addContainer">
            <button type="button" class="btn btn-success" id="add" onclick="window.location.href='signedin.html'">Return Home</button>
            <button type="button" class="btn btn-success" id="add" onclick="window.location.href='community.php'">Community Board</button>
        </div>

    <div class="container-fluid" id="title">
        <h1>Add a Community Task</h1>
    </div>

    <form method="post">
        <div class="container p-0">
            <input class="enterText" name="title" placeholder="Title" type="text" autocomplete="off" value="">
            <textarea class="enterText" id="description" name="description" value="" placeholder="Description" type="text" autocomplete="off"></textarea>
            
            <br>
            <!-- <input class="enterText name" style="margin-right: 20px;" name="first" placeholder="First Name" type="text" autocomplete="off" value="">
            <input class="enterText name" name="last" placeholder="Last Name" type="text" autocomplete="off" value="">

            <input class="enterText" name="email" placeholder="Email" type="text" autocomplete="off" value="">

            <input class="enterText" name="address" placeholder="Address" type="text" autocomplete="off" value=""> -->

            <input class="enterText" name="date" placeholder="Date" type="text" autocomplete="off" value="">
            <input class="enterText" name="time" placeholder="Time" type="text" autocomplete="off" value="">
            <input class="enterText" name="requirements" placeholder="Skills" type="text" autocomplete="off" value="">
            <input class="enterText" name="rewards" placeholder="Rewards" type="text" autocomplete="off" value="">

            <div class="container" id="submitContainer">
                Image File
                <input type="file" class="form-control" id="customFile" />
            </div>


            <div class="container-fluid"></div>
            <input name="submit" type="submit" value="Submit" style="margin-bottom: 200px;">

        </div>
        
    </form>

    <?php
    
        if (isset($_POST["submit"])){
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $db = "owlhack2021";
            $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die ("Connect failed: %s\n". $conn -> error);
            
            $title = $_POST["title"];
            $description = $_POST["description"];
            $first = "Max"; // $_POST["first"];
            $last = "Lim"; // $_POST["last"];
            $email = "1150programming@gmail"; // $_POST["email"];
            $address = "8973 Blackburn St. Waterloo"; // $_POST["address"];
            $date = $_POST["date"];
            $time = $_POST["time"];
            $requirements = $_POST["requirements"];
            $rewards = $_POST["rewards"];

            // $image = $_POST["image"];
            $image = "johnny.png";

            $select_query = "SELECT * FROM cards";
            $id = $conn->query($select_query)->num_rows;

            $insert_query = "INSERT INTO cards VALUES(
                '$title',
                '$description',
                '$first',
                '$last',
                '$date',
                '$time',
                '$requirements',
                '$rewards',
                $id,
                '$image',
                '$email',
                '$address'
            )";

            $conn->query($insert_query);

            ?> <script>window.location.href="oldCommunity.php"</script><?php

            
        }

    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>