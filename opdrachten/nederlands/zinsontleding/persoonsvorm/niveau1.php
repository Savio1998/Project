<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Persoonsvorm niveau 1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require '../../../../navbar.php'; ?>
 
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
<div class="col-md-4"><?php if($_COOKIE['opdracht1'] == 0) { ?><a href="./niveau1/opdrachten1.php">Persoonsvorm Oefeningen 1</a><?php }else{ ?> Persoonsvorm Oefeningen 1 <?php } ?></div>
<div class="col-md-4"></div>
<div class="col-md-4"> <?=isset($_COOKIE["opdracht1"]) ? $_COOKIE['opdracht1'] : 0 ?>/100</div><br>

<div class="col-md-4"><?php if($_COOKIE['opdracht2'] == 0) { ?><a href="./niveau1/opdrachten2.php">Persoonsvorm Oefeningen 2</a><?php }else{ ?> Persoonsvorm Oefeningen 2 <?php } ?></div>
<div class="col-md-4"></div>
<div class="col-md-4"> <?=isset($_COOKIE["opdracht2"]) ? $_COOKIE['opdracht2'] : 0 ?>/100</div><br>

<div class="col-md-4"><?php if($_COOKIE['opdracht3'] == 0) { ?><a href="./niveau1/opdrachten3.php">Persoonsvorm Oefeningen 3</a><?php }else{ ?> Persoonsvorm Oefeningen 3 <?php } ?></div>
<div class="col-md-4"></div>
<div class="col-md-4"> <?=isset($_COOKIE["opdracht3"]) ? $_COOKIE['opdracht3'] : 0 ?>/100</div><br>
</div>
</div>        
        
         
</body>
</html>