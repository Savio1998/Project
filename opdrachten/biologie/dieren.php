<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>dieren herkennen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require '../../navbar.php'; ?>
 
 <style>
     h4{
         text-align:center;
     }
 </style>
 
</head>
<body>    
<?php
?>

<div class="container">
<center><h3><b>Dieren</b></h3></center>
<br>
<h4><b>Leer ze herkennen             </b></h4>
<br>
<br>
<div class="container">

<br>
<div class="row">
<div class="col-md-4"><b>Oefeningen</b></div>
<div class="col-md-4"></div>
<div class="col-md-4"><b>Score</b></div>
</div>
<br>
<div class="row">
<div class="col-md-4"><?php if($_COOKIE['opdr-bio-dier-herken-n1-opdr1'] == 0) { ?><a href="./opdrachten/opdrachten1.php">dieren herkennen 1</a><?php }else{ ?> dieren herkennen 1 <?php } ?></div>
<div class="col-md-4"></div>
<div class="col-md-4"> <?=isset($_COOKIE["opdr-bio-dier-herken-n1-opdr1"]) ? $_COOKIE['opdr-bio-dier-herken-n1-opdr1'] : 0 ?>/100</div><br>

<div class="col-md-4"><?php if($_COOKIE['opdr-bio-dier-herken-n1-opdr2'] == 0) { ?><a href="./opdrachten/opdrachten2.php">dieren herkennen 2</a><?php }else{ ?> dieren herkennen 2 <?php } ?></div>
<div class="col-md-4"></div>
<div class="col-md-4"> <?=isset($_COOKIE["opdr-bio-dier-herken-n1-opdr2"]) ? $_COOKIE['opdr-bio-dier-herken-n1-opdr2'] : 0 ?>/100</div><br>

<div class="col-md-4"><?php if($_COOKIE['opdr-bio-dier-herken-n1-opdr3'] == 0) { ?><a href="./opdrachten/opdrachten3.php">dieren herkennen 3</a><?php }else{ ?> dieren herkennen 3 <?php } ?></div>
<div class="col-md-4"></div>
<div class="col-md-4"> <?=isset($_COOKIE["opdr-bio-dier-herken-n1-opdr3"]) ? $_COOKIE['opdr-bio-dier-herken-n1-opdr3'] : 0 ?>/100</div><br>
</div>
</div>   

        
        
    </div>      
</body>
</html>