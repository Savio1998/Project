<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Onderwerp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require '../../navbar.php'; ?>
 
</head>
<body>    
<?php
?>

<div class="container">
<center><h3><b>Onderwerp</b></h3></center>
<br>
Het onderwerp van een zin is altijd de persoon die een handeling uitvoert. 
               Als ik zeg: "Ik ga lopen" dan is "Ik" het onderwerp. 
               Dit komt omdat "Ik" op dat moment de handeling "gaan" verricht.
               "ga" is in dit geval de persoonsvorm.
               Een eenvoudige manier om achter het onderwerp te komen is door de vraag: "Wie [persoonsvorm]?".
               Hierin moet je zelf de persoonsvorm plaatsen en vervolgens de vraag beantwoorden.
               Het antwoord op die vraag is dan het onderwerp.
               Bijvoorbeeld bij de zin "Ik ga lopen" kan je de vraag "Wie gaat?" stellen.
               In dit geval is het antwoord dus "Ik".
               Hieronder vind je een aantal oefeningen over het onderwerp.
<br>
<br>
<div class="row">
<div class="col-md-4"><b>Oefeningen</b></div>
<div class="col-md-4"></div>
<div class="col-md-4"><b>Score</b></div>
</div>
<br>
<div class="row">
<div class="col-md-4"><?php if($_COOKIE['opdr-nl-ond-opdr1'] == 0) { ?><a href="./onderwerp/opdrachten1.php">Onderwerp Oefeningen 1</a><?php }else{ ?> Onderwerp Oefeningen 1 <?php } ?></div>
<div class="col-md-4"></div>
<div class="col-md-4"> <?=isset($_COOKIE["opdr-nl-ond-opdr1"]) ? $_COOKIE['opdr-nl-ond-opdr1'] : 0 ?>/100</div><br>

<div class="col-md-4"><?php if($_COOKIE['opdr-nl-ond-opdr2'] == 0) { ?><a href="./onderwerp/opdrachten2.php">Onderwerp Oefeningen 2</a><?php }else{ ?> Onderwerp Oefeningen 2 <?php } ?></div>
<div class="col-md-4"></div>
<div class="col-md-4"> <?=isset($_COOKIE["opdr-nl-ond-opdr2"]) ? $_COOKIE['opdr-nl-ond-opdr2'] : 0 ?>/100</div><br>
</div>
</div>        
        
         
</body>
</html>