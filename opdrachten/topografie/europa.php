<?php session_start();
// array met daarin alle vragen
   $vraag = array(
            "Welke stad ligt er bij 1?",
            "Welke stad ligt er bij 2?",
            "Welke stad ligt er bij 3?",  
            "Welke stad ligt er bij 4?",
            "Welke stad ligt er bij 5?",
            "Welke land ligt er bij 6?",
            "Welke land ligt er bij 7?",
            "Welke land ligt er bij 8?",
            "Welke land ligt er bij 9?",
            "Welke land ligt er bij 10?"
        );
    
     
    // array met daarin in antwoorden    
   $antwoord = array(
            "Parijs",
            "Rome",
            "London",
            "Madrid",
            "Wenen",
            "Polen",
            "Duitsland",
            "Noorwegen",
            "Ijsland",
            "Rusland"
        );
        
     
$velden = 1;
       $input = 1;
       $cookie="toponl";
       $exitLink='<META HTTP-EQUIV="Refresh" Content="0; URL=/opdrachten/topografie.php">';
       
       require '/functies/single-antw.php';
       
?>
<!DOCTYPE html>
<html>
<head>
  <title>Nederland resultaat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require 'navbar.php'; ?>
</head>
<body>
<div class="container"> 
<h3><b>Europa</b></h3><br>
<h4><b>Beantwoord de volgende topografische vragen</b></h4><br>
<img src="/afbeeldingen/kaarteuropa.png" height="500" width="500">

score = <?=$score?>/100
<div class = "row">
<form action="europa.php" method="POST">
     <?php require "/functies/antw-veld.php";?>
        </form> 
    </div>
  </div>       
</body>
</html>