<?php

    session_start();

    $error = "";  

    if (array_key_exists("logout", $_GET)) {
        
        unset($_SESSION);
        setcookie("id", "", time() - 60*60);
        $_COOKIE["id"] = "";  
        
        session_destroy();
        
    } else if ((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])) {
        
        header("Location: logged_in-Home.php");
        
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link id="favicon" rel="shortcut icon" sizes="180x180" href="Logo.png" type="image/png"/>
    <title>Gaming with Arpan and Ayan</title>
    <script src="jquery.min.js"></script>
    <?php include("style.php"); ?>

</head>

<body>

<?php include("nav-bar2.php"); ?>
    
    <div id="Home">
      <div class="jumbotron">
        <h1 class="display-3">Gaming with Arpan and Ayan</h1>
        <p class="lead">Welcome to Gaming with Arpan and Ayan</p>
        <hr class="m-y-2">
        <p>We also have youtube channel you can acess it by clicking<br>the 'Visit Channel' button in the navbar.</p>
      </div>

      <div class="container">
        <div class="row" id="appSummary">
          <h1>Here, is the example on which we will talk.</h1>
          <p class="lead"> Don't use any harsh word while messaging us. </p>
        </div>
      </div>

      <div class="container">
        <div class="card-deck-wrapper">
          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="Minecraft.jpg" alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Minecraft</h4>
                <p class="card-text">We will talk about best enchantment of armor and weapons,tips and tricks of defeating Wither and Ender Dragon,etc.</p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="Free Fire.jpg" alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Free Fire</h4>
                <p class="card-text">We will talk about tips and tricks to become a pro player.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div style="text-align:right;"><strong>Total no. of Visitor:-</strong><img src="https://counter10.stat.ovh/private/freecounterstat.php?c=abaqdcdl49x8885dhet13m3aesc2s26d" border="0" title="web page counter code" alt="web page counter code"></div>
    <?php include("footer2.php"); ?>