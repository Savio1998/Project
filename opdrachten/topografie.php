<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Topografie</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="topo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require 'navbar.php'; ?>
 
    
                
 
</head>
<body>
    <div class = "container">
             <h1> Leerling kiest uit (Nederland,Europa,Wereld)</h1><br>  

        
    <div>
    <div style="display: inline-block;"><?php if($_COOKIE['opdr-tp-nl'] == 0) { ?><a href="topografie/kaartnederland.php"><img src="/afbeeldingen/nederland.jpg" height="300" width="300" margin-right: "50px" ></a>
    <?php }else{ ?> <img src="/afbeeldingen/nederland.jpg" height="300" width="300" margin-right: "50px" > <?php } ?>
    <h3> Nederland </h3><?=isset($_COOKIE["opdr-tp-nl"]) ? $_COOKIE['opdr-tp-nl'] : 0 ?>/100</div>
    
    <div style="display: inline-block;"><?php if($_COOKIE['opdr-tp-eu'] == 0) { ?><a href="topografie/europa.php"><img src="/afbeeldingen/europa.png" height="300" width="300" margin="50" margin-right: "50px"></a><br>
    <?php }else{ ?> <img src="/afbeeldingen/europa.png" height="300" width="300" margin="50" margin-right: "50px"> <?php } ?>
    <h3> Europa</h3><?=isset($_COOKIE["opdr-tp-eu"]) ? $_COOKIE['opdr-tp-eu'] : 0 ?>/100</div>
   
   <div style="display: inline-block;"><?php if($_COOKIE['opdr-tp-wd'] == 0) { ?><a href="topografie/wereld.php"><img src="/afbeeldingen/wereldkaart.jpg" height="300" width="300" margin="50"></a><br>
   <?php }else{ ?> <img src="/afbeeldingen/wereldkaart.jpg" height="300" width="300" margin="50"> <?php } ?> 
    <h3>Wereld</h3><?=isset($_COOKIE["opdr-tp-wd"]) ? $_COOKIE['opdr-tp-wd'] : 0 ?>/100</div>
</div>
</div>    
     
</body>
</html>
    
