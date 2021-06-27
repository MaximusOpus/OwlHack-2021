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
            font-family: cursive;
            margin: 0;
            padding: 0;
            background-image: url("images/community2.jpg");
            background-attachment: fixed;
            background-size: 100% 100%;

        }

        #titleTextContainer {
            font-weight: bold;
            color: white;
            font-size: 70px;
            text-align: center;
            text-shadow: 5px 5px black;
            background-color: #233131;
        }

        #mainContainer {
            margin: 16px 0;
            text-align: center;
        }

        #secondContainer {
            margin: auto;
        }

        .card-title {
            font-weight: bold;
        }

        .card {
            width: 375px;
            display: inline-block;
            margin: 30px;
            text-align: left;
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

        .btn {
            width: 100px;
        }

        .btn-success {
            border: 2px solid black;
        }


    </style>
    <body>

        <div class="container-fluid fixed-top" id="addContainer">
            <button type="button" class="btn btn-success" id="add" onclick="window.location.href='signedin.php?_=_'">Return Home</button>
            <button type="button" class="btn btn-success" id="add" onclick="window.location.href='inbox.html'">Inbox</button>
            <button type="button" class="btn btn-success" id="add" onclick="window.location.href='add.php'">Add a Card</button>
        </div>

        <div style="height: 50px;"></div>
        <div class="container-fluid p-0" id="titleTextContainer">
            Welcome Residents of Eastville!
        </div>

        <?php
            echo "
            <script>
                function pending(id) {
                    var obj = document.getElementById(id);

                    var color = '#ff6a00'

                    obj.innerText = 'Pending';
                    obj.style.color = color;
                    obj.style.border = '1px solid ' + color;
                    obj.disabled = true;
                }
            </script>
            ";

            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $db = "owlhack2021";
            $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die ("Connect failed: %s\n". $conn -> error);

            $select_query = "SELECT * FROM cards";
            $selected_rows = $conn->query($select_query);

            echo "<div class='container-fluid p-0 m-0' id='mainContainer'><table id='secondContainer'>";
            echo "<tr>";
            $i = 0;
            $id = 0;
            while ($row = $selected_rows->fetch_assoc()){
                if ($i == 3){
                    echo "</tr><tr>";
                    $i = 0;
                }
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
                $email = $row["email"];
                $address = $row["address"];

                if ($row["image"] != "") {
                    $image = $row["image"];
                } else {
                    $image = "none.png";
                }
                if ($requirements == "") {
                    $requirements = "none";
                }

                echo 
                "
                <td style='vertical-align: top'>
                <div class='card'>
                    <img class='card-img-top' src='images/$image' alt='Card image cap'>
                    <div class='card-body' style='margin-bottom: -15px'>
                      <h4 class='card-title'>$title</h4>
                        <div class='row'>
                            <div class='col'><h5 style='color: #444'>$first $last</h5></div>
                            <div class='col' style='text-align: right'>$email</div>
                        </div>
                    </div>
                    <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>$address</li>
                        <li class='list-group-item'>$description</li>
                        <li class='list-group-item'>
                            <div class='row'>
                                <div class='col'>$date</div>
                                <div class='col' style='text-align: right'>$time</div>
                            </div>
                        </li>
                        <li class='list-group-item'><i><b>Skills</b></i><br>$requirements</li>
                        <li class='list-group-item'><i><b>Reward</b></i><br>$rewards</li>
                    </ul>";
                    if ($first != "Max") {
                        echo "<div class='card-body'>
                        <button href='#' onclick='pending($id)' class='btn btn-outline-primary' id='$id'>Accept</button>
                        </div>";
                    }
                echo 
                "
                </div>
                </td>";
                $i++;
                $id++;
            }

            echo "<script>pending(0);</script>";
            echo "</tr></table></div>";
        ?>

        
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>