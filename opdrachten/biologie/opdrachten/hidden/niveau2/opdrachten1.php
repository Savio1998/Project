<?php session_start();

// alleen 10 vragen en antwoorden, niet meer en niet minder
       $vraag = array(
            "",
            "",
            "",
            "",
            "",
            "",
            "",
            "",
            "",
            ""            
        );
        
        $antwoord = array(
                    "amfibie",
                    "zoogdier",
                    "gevogelte",
                    "zoogdier",
                    "zoogdier",
                    "gevogelte",
                    "zoogdier",
                    "zoogdier",
                    "zoogdier",
                    "gevogelte"
        );
        
        $velden = 1;
        $input = 1;
        $cookie = "opdr-bio-dier-herken-n1-opdr1";
        $exitLink = '<META HTTP-EQUIV="Refresh" Content="0; URL=/opdrachten/biologie/cellen/niveau1.php">';
        
        require '/functies/single-antw.php';
        
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .col-md-5 {
    margin-top: -5px;
}
        </style>
  <title>Dieren herkennen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require '../../../../navbar.php'; ?>
 
</head>
<body>

<div class="container"> 
 
 <h3><b>Dieren herkennen</b></h3> 
 <div class="row">
    <div class="col-md-5"><h4><b>Geef aan of het een zoogdier, amfibie of gevogelte is</b></h4></div><div class="col-md-2"></div><div class="col-md-2"></div><div class="col-md-3"><b>Score:</b> <?=$score?>/100</div>
</div><br>

<div class = "afbeelding">
        <img src =  "/afbeeldingen/Herkennen.png" style = "float:right; margin-right:0px;">
    </div>

<div class="row">
<form action="opdrachten1.php" method="POST">
    
    <?php require '/functies/antw-veld.php'; ?>

     
    </form>   
    </div>   
</body>
</html>
