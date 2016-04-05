<?php session_start();


       $vraag = array(
            "Ik fiets naar school.",
            "Ik vier mijn verjaardag.",
            "Hij gaat wandelen.",
            "Jouw zus maakt ontbijt.",
            "Mijn moeder kookt vanavond.",
            "Zij heeft geen geld",
            "Je kletst te veel!",
            "Hij loopt in een steegje.",
            "Wij lopen naar de bus.",
            "Ik heb honger."            
        );                
        
             $antwoord = array(
                    "fiets",
                    "vier",
                    "gaat",
                    "maakt",
                    "kookt",
                    "heeft",
                    "kletst",
                    "loopt",
                    "lopen",
                    "heb"
        );
            $antwoord1 = array(
                    "ik",
                    "ik",
                    "hij",
                    "jouw zus",
                    "mijn moeder",
                    "zij",
                    "je",
                    "hij",
                    "wij",
                    "ik"
        );
        
        $velden = 2;
        $input = 2;
        $cookie = "opdr-nl-zo-ond-n1-opdr1";
        $exitLink = '<META HTTP-EQUIV="Refresh" Content="0; URL=/opdrachten/nederlands/zinsontleding/onderwerp/niveau1.php">';
        
        require '/functies/single-antw.php'; 
            
        
        
?>

<!DOCTYPE html>
<html>
<head>
  <title>Onderwerp opdrachten 1</title>
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
 
 <h3><b>Onderwerp</b></h3> 
 <div class="row">
    <div class="col-md-5"><h4><b>Geef de persoonsvorm en het onderwerp.</b></h4></div><div class="col-md-2"></div><div class="col-md-2"></div><div class="col-md-3"><b>Score:</b> <?=$score?>/100</div>
</div><br>

<div class="row">
    <div class="col-md-5"></div><div class="col-md-2">Persoonsvorm</div><div class="col-md-2">Onderwerp</div><div class="col-md-3"></div>
</div>
<div class="row">
<form action="opdrachten1.php" method="POST">

<?php    require '/functies/antw-veld.php'; ?>

    </form>   
    </div>   
</body>
</html>
