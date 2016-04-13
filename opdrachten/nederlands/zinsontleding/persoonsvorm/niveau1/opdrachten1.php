<?php session_start();

// alleen 10 vragen en antwoorden, niet meer en niet minder
       $vraag = array(
            "Ik fiets naar school.",
            "Ik vier mijn verjaardag.",
            "Jij eet bij je grootouders.",
            "Ik ga met de bus naar school.",
            "Mijn moeder kookt vanavond.",
            "Morgen hebben wij geen school.",
            "Ik geef mijn neefje een cadeau.",
            "Mijn grootouders hebben een kunstgebit.",
            "Het jongetje gaf een kusje aan zijn moeder.",
            "Mijn vader gaf een bosje bloemen aan mijn moeder."            
        );
        
        $antwoord = array(
                    "fiets",
                    "vier",
                    "eet",
                    "ga",
                    "kookt",
                    "hebben",
                    "geef",
                    "hebben",
                    "gaf",
                    "gaf"
        );
        
        $velden = 1;
        $input = 1;
        $cookie = "opdr-nl-zo-pers-n1-opdr1";
        $exitLink = '<META HTTP-EQUIV="Refresh" Content="0; URL=/opdrachten/nederlands/zinsontleding/persoonsvorm/niveau1.php">';
        
        require '/functies/single-antw.php';
        
?>

<!DOCTYPE html>
<html>
<head>
  <title>Persoonsvorm opdrachten 1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require '../../../../../navbar.php'; ?>
 
</head>
<body>

<div class="container"> 
 
 <h3><b>Persoonsvorm</b></h3> 
 <div class="row">
    <div class="col-md-5"><h4><b>Geef de persoonsvorm.</b></h4></div><div class="col-md-2"></div><div class="col-md-2"></div><div class="col-md-3"><b>Score:</b> <?=$score?>/100</div>
</div><br>

<div class="row">
    <div class="col-md-5"></div><div class="col-md-3">Persoonsvorm</div><div class="col-md-4"></div>
</div>
<div class="row">
<form action="opdrachten1.php" method="POST">
    
    <?php require '/functies/antw-veld.php'; ?>
     
    </form>   
    </div>   
</body>
</html>
