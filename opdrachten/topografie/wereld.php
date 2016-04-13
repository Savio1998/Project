<?php 
   $vraag = array(
            "Welke continent ligt er bij 1?",
            "Welke continent ligt er bij 2?",
            "Welke continent ligt er bij 3?",  
            "Welke continent ligt er bij 4?",
            "Welke continent ligt er bij 5?",
            "Welke continent ligt er bij 6?",
            "Welke continent ligt er bij 7?",
            "Welke zee of oceaan ligt er bij 8?",
            "Welke zee of oceaan ligt er bij 9?",
            "Welke zee of oceaan ligt er bij 10?"
        );

        
   $antwoord = array(
            "Azië",
            "Australie",
            "Afrika",
            "Europa",
            "Noord Amerika",
            "Zuid Amerika",
            "Antartica",
            "Middellanse zee",
            "Pacific oceaan",
            "Grote oceaan"
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
<h3><b>Wereld</b></h3><br>
<h4><b>Beantwoord de volgende topografische vragen</b></h4><br>
<img src="/afbeeldingen/wereld.jpg" height="500" width="500">

score = <?=$score?>/100
<div class ="row">
<form action="wereldresultaat.php" method="POST">
     <?php require "/functies/antw-veld.php";?>
        </form> 
    </div> 
  </div>    
</body>
</html>