<?php
//You do not have to echo html content.  It can just sit outside the php script.
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap5.css" rel="stylesheet">
  <link href="adam.css" rel="stylesheet">

  <style>
    .contactButton{
      padding: 4px 4px;
    }
  </style>

<title>Resume for Adam Winter</title>
</head>

<body id="grad1">
  <div class = " container-fluid">
  <div class= "row">
    <div class="d-sm-none d-md-block col-2">
              <!--
                <h1>Left Margin</h1>
              -->
    </div>
    <div class="col-8 col-sm-12"></br><h1 class="myHeader-Title text-center">Adam Winter</h1></div>
    <div class = "col-2 col-sm-12 logo">
            </br>
            <button onclick="getPhone()" class="btn btn btn-outline-secondary btn-sm contactButton" type="button" data-bs-toggle="collapse" data-bs-target="#phone" aria-expanded="false" aria-controls="phone">
                Show Phone
            </button>
            <div class="collapse" id="phone">
            <div class="card">
              <span id="myPhone">Phone here</span>
            </div>
            </div>
      
            <button onclick="getEmail()" class="btn btn btn-outline-secondary btn-sm contactButton" type="button" data-bs-toggle="collapse" data-bs-target="#email" aria-expanded="false" aria-controls="email">
                Show Email
            </button>
            <div class="collapse" id="email">
            <div class="card">
              <span id="myEmail">Email Here</span>
            </div>
            </div>
    </div>

    <div class="d-sm-none d-md-block col-1">
              <!--
                <h1>Right Margin</h1>
              -->
    </div>
  </div>
  </div>

  <script>
    function getPhone(){
      document.getElementById('myPhone').innerHTML = atob("MjUzLTcwOS01MTAz");   
    }

    function getEmail(){
      document.getElementById('myEmail').innerHTML = atob("Z3Jhdml0eS5mcmVlemVAZ21haWwuY29t");
    }
  </script>

    <!--
    ********************************* NAV BAR ****************************************************************************************************
  -->
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <!--a class="navbar-brand" href="#">Navbar</a-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="./">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    More
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="resume.php">Resume</a></li>
                    <li><a class="dropdown-item" href="portfolio.php">Portfolio</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="guestbook.php">Sign the Guestbook</a></li>
                  </ul>
                </li>
                <!--li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li-->
              </ul>
              <span class="text-end">
                <?php 
                  if(isset($_COOKIE["fname"])){
                    echo'Hello, '.$_COOKIE["fname"].'!';
                  }
                ?>
              </span>
            </div>
          </div>
        </nav>
  <!--
    ********************************* End of  NAV BAR ****************************************************************************************************
  -->
