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
        }

        #title {
            margin-top: 150px;
            margin-bottom: 30px;
            text-align: center;
        }

        h1 {
            font-size: 70px;
            margin-bottom: 75px;
        }

        #incorrectContainer {
            display: table;
            margin: auto;
            position: relative;

            height: 100px;
            width: 450px;
            border-radius: 25px;
            background-color: #f8c0c0;

            
            background-color: white;
            color: white;

        }

        #incorrectText {
            font-size: 20px;
            display: table-cell;
            text-align: left;
            vertical-align: middle;
            padding: 20px;
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
            border-radius: 25px;

            font-size: 25px;
            padding-left: 10px;
        }

        ::placeholder {
            color: #575757;
        }

        #signinData {
            text-align: center;
        }

        #forgotContainer {
            width: 450px;
            text-align: left;

            font-size: 20px;
        }

        input[type="submit"] {
            margin-top: 65px;
            outline: none;
            border-radius: 25px;

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

    </style>
    <body>
    <div class="container-fluid" id="title">
        <h1>Sign In</h1>
        <div class="container" id="incorrectContainer">
            <div id="incorrectText">The username or password you entered is incorrect. Please try again.</div>
        </div>
    </div>

    <form method="post">
        <div class="container p-0" >
            <input class="enterText" name="username" type="text" placeholder="Username" autocomplete="off" value='<?php echo isset($_POST["username"]) ? $_POST["username"] : "" ?>'>
            <input class="enterText" name="password" type="password" placeholder="Password" autocomplete="off" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : "" ?>">
            <div class="container-fluid"></div>
            <div class="container p-0" id="forgotContainer">
                &nbsp;<a href=""><u>Forgot your password?</u></a>
            </div>
            <input name="submit" type="submit" value="Sign In">
            <div class="container p-0" id="createContainer">
                Don't have an account? <a href="createAccount.html">Create one!</a>
            </div>
        </div>
        
    </form>

    <?php
        $checks = 0;
        if (isset($_POST["submit"])){
            if (isset($_POST["username"])){
                if ($_POST["username"] == "maximum"){
                    $checks++;
                }
            }
            if (isset($_POST["username"])){
                if ($_POST["password"] == "123" || $_POST["password"] == "124"){
                    $checks++;
                }
            }

            if ($checks == 2){
                if ($_POST["password"] == "123"){
                    header('Location: signedin.php');
                } else {
                    header('Location: signedin.php?_=_');
                }                
            } else {
                ?> 
                <script>
                    var iStyle = document.getElementById("incorrectContainer").style;
                    iStyle.color = "black";
                    iStyle.backgroundColor = "#f8c0c0";
                </script>
                <?php
            }

        } 
    ?>
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>