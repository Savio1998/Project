<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Rekenen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php include '../navbar.php'; ?>
 
 <!--Leerling kiest uit Sommen (Keren, Delen, Aftrekken, Optellen en Tafels)
                        Geld
                        Tijd/Klokken + Afstanden
                        Gewicht 
                        Meten 
                        Breuken + Procenten-->
 
</head>
<body>    
    <a href="./rekenen/sommen/sommen.php"><button>Sommen maken</button></a>
    <a href="./rekenen/geld.php"><button>Rekenen met Geld</button></a>
    <a href="./rekenen/tijdenafstand.php"><button>Tijden en Afstanden</button></a>
    <a href="./rekenen/gewicht.php"><button>Gewicht</button></a>
    <a href="./rekenen/meten.php"><button>Meten</button></a>
    <a href="./rekenen/breukprocent.php"><button>Breuken en procenten</button></a>
</body>
</html>
