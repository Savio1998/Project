<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Cel - Weefsel - Orgaan - Orgaanstelsel of een Organisme</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require '../../../navbar.php'; ?>
 
</head>
<body>    
<?php



?>

<div class="container">
<center><h3><b>Niveau 1</b></h3></center>
<br>
<br>
<div class="row">
<div class="col-md-4"><b>Oefeningen</b></div>
<div class="col-md-4"></div>
<div class="col-md-4"><b>Score</b></div>
</div>
<br>
<div class="row">
<div class="col-md-4"><?php if($_COOKIE['opdr-bio-dier-herken-n1-opdr1'] == 0) { ?><a href="./niveau1/opdrachten1.php">dieren herkennen 1</a><?php }else{ ?> dieren herkennen 1 <?php } ?></div>
<div class="col-md-4"></div>
<div class="col-md-4"> <?=isset($_COOKIE["opdr-bio-dier-herken-n1-opdr1"]) ? $_COOKIE['opdr-bio-dier-herken-n1-opdr1'] : 0 ?>/100</div><br>

<div class="col-md-4"><?php if($_COOKIE['opdr-bio-dier-herken-n1-opdr2'] == 0) { ?><a href="./niveau1/opdrachten2.php">dieren herkennen 2</a><?php }else{ ?> dieren herkennen 2 <?php } ?></div>
<div class="col-md-4"></div>
<div class="col-md-4"> <?=isset($_COOKIE["opdr-bio-dier-herken-n1-opdr2"]) ? $_COOKIE['opdr-bio-dier-herken-n1-opdr2'] : 0 ?>/100</div><br>

<div class="col-md-4"><?php if($_COOKIE['opdr-bio-dier-herken-n1-opdr3'] == 0) { ?><a href="./niveau1/opdrachten3.php">dieren herkennen 3</a><?php }else{ ?> dieren herkennen 3 <?php } ?></div>
<div class="col-md-4"></div>
<div class="col-md-4"> <?=isset($_COOKIE["opdr-bio-dier-herken-n1-opdr3"]) ? $_COOKIE['opdr-bio-dier-herken-n1-opdr3'] : 0 ?>/100</div><br>
</div>
</div>        
        
         
</body>
</html>