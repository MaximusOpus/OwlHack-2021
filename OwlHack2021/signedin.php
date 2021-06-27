<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="moorpark_style.css"> 

    <title>Empower</title>
  </head>
  <style>

    body {
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    #titleTextContainer {
      position: absolute;
      top: 40%;
      font-weight: bold;
      color: white;
      font-size: 6vw;
      text-align: center;
      text-shadow: 5px 5px black;
    }

    #top {
      font-size: 1.5vw;
      font-weight: bold;
      
      height: 100%;
    }

    #sign {
      font-size: 1.25vw;
    }

    .btn-primary {
      background-color: #bcdff7ef;
      color: black;
      border: 2px solid #0b7eca;
    }

    .btn-primary:hover {
      background-color: #4cb4faef;
    }

    li {
      font-size: 25px;
      color: black;
      margin: 70px 0;

      list-style-position: inside;
    }

    #account {
      text-decoration: line-through;
    }

    .break {
      width: 100%;
      background-color: white;
      height: 10px;
    }

    #board {
      top: 10px;
      height: 50px;
      background-color: #69bef7ef;
      border-top: 2px solid black;
      border-bottom: 2px solid black;

      border: none;
      background-color: transparent;
    }


    .button {
      display: inline-block;
      color: black;
      text-align: center;
      font-weight: bold;
      font-size: 30px;
      width: 100%;
      left: 0;
      position: absolute;
      height: 100%;
      transition: all 0.5s;
      cursor: pointer;
      
      background-color: #71bff3;
      border: 2px solid black;

      overflow: hidden;
    }

    .button span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;

      outline: none;
    }

    .button span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;

      outline: none;
    }

    .button:hover span {
      padding-right: 25px;

      outline: none;
    }

    .button:hover span:after {
      opacity: 1;
      right: 0;

      outline: none;
    }

    .button:after {
      content: "";
      background: #f1f1f1;
      display: block;
      position: absolute;
      padding-top: 300%;
      padding-left: 350%;
      margin-left: -5px !important;
      margin-top: -120%;
      opacity: 0;
      transition: all 0.8s
    }

    .button:active:after {
      padding: 0;
      margin: 0;
      opacity: 1;
      transition: 0s
    }

    .btn-primary {
      background-color: #bcdff7ef;
      color: black;
      border: 2px solid #0b7eca;
    }

    .btn-primary:hover {
      background-color: #4cb4faef;
    }

    .sign {
      margin-top: 20px;
      margin-right: 0px;
      margin-left: 10px;
    }

    #signOut {
      display: block;
      margin-top: -70px;
      margin-left: 28px;
      font-size: 20px;
      color: black;
      text-decoration: underline;
    }


  </style>
  <body>
    <!-- <div class="container-fluid fixed-top p-0 m-0" id="board">
      <div id="top" class="row m-0">
        <div class="col">
          <button class="button"><span>&nbsp;Create for Your Community&nbsp;</span></button>
        </div>
        <div class="col">
          <a href="join.html"><button class="button" style="border-left: none"><span>&nbsp;Join Your Community&nbsp;</span></button></a>
        </div>
      </div>
      <div class="container-fluid" style="text-align: right;">
        <a href="inbox.html" class="btn btn-primary sign">Inbox</a>
        <a href="home.html" class="btn btn-primary sign">Sign Out</a>
      </div>
      </div>
    </div> -->



    <div class="container-fluid p-0" style="position: relative;">
      <img src="images/community.jpg" width="100%">
      <div class="container-fluid" id="titleTextContainer">
        <p id="titleText">Empower Your Community</p>
      </div>
    </div>

    <div class="break"></div>

    <div class="container-fluid">
      <div class="container" id="started" style='box-shadow: none;'>
        <div class="row no-gutters">
          <div class="col-5" style="border-top: 10px solid #0b7eca;">
            <div class="container" style="width: 94%" id="text">
              <h3 style="font-weight: bold; font-size: 35px;">Getting Started</h3>
              <h3>
                Empower <b>your local neighborhood community</b> by <i style="color: #0b7eca">completing tasks</i> to help others with their daily lives.
              </h3>
              <ol>
                <li id="account">
                  Create an account or sign up.<br>
                </li>
                <a href="home.html" id="signOut">Sign Out</a>
                <li>
                  <?php 
                    if (isset($_GET["_"])){
                      echo '<a style="text-decoration: line-through">Start a task board for your community</a> or <a href="oldCommunity.php" style="color: #6210a5">join your community\'s board.</a>';
                    } else {
                      echo '<a href="start.html">Start a task board for your community</a> or <a href="join.html" style="color: #6210a5">join your community\'s board.</a>';
                    }
                  ?>
                </li>
                <li>
                  Enjoy and help others!
                </li>
              </ol>
            </div>
          </div>
          <div class="col-7">
            <div class="card px-0">
              <img class="card-img-top" src="images/help.jpg">
                <div class="card-img-overlay">
                  <div class="container-fluid mt-auto">
                    <h3>Explore Ways to Help Others</h3>
                    <a href="https://www.uopeople.edu/blog/helping-the-community/" target="_blank">Explore Programs</a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="break"></div>

    <div class="container-fluid p-0" style="position: relative;">
      <img src="images/waiting3.jpg" width="100%">
      <div class="container-fluid" id="titleTextContainer">
        <p id="titleText" style="font-style: italic">What are you waiting for?</p>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>