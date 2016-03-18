<?php session_start(); ?>
<html>
<head>
  <title>Nederlands</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php include '../navbar.php'; ?>
    
</head>
<body> 
    <div class="container">
<h3><b>Zinsontleding</b></h3><br>
<h4><b> Wat is de persoonsvorm in de volgende zinnen?</b></h4><br>
<?php 
   $pvvraag = array(
            "Ik fiets naar school.",
            "Ik vier mijn verjaardag.",
            "Jij eet bij je grootouders."            
        );
?>
<form action="nederlandsresultaat.php" method="POST">
     <?php for($pvi = 0; $pvi<3; $pvi++){?> 
            <label> <?=$pvvraag[$pvi]?> </label> <input type="text" name="<?="pvvraag{$pvi}"?>" value="" autocomplete="off"><br>
<?php } ?>
<br><h4><b>Wat is het onderwerp in de volgende zinnen?</b></h4><br>
<?php 
   $ondvraag = array(
            "Ik ga met de bus naar school.",
            "Mijn moeder kookt vanavond.",
            "Morgen hebben wij geen school."            
        );
?>    
 <?php for($ondi = 0; $ondi<3; $ondi++){?> 
            <label> <?=$ondvraag[$ondi]?> </label> <input type="text" name="<?="ondvraag{$ondi}"?>" value="" autocomplete="off"><br>
<?php } ?>

<br><h4><b>Wat is het lijdend voorwerp in de volgende zinnen?</b></h4><br>
<?php 
   $lvvraag = array(
            "Ik geef mijn neefje een cadeau.",
            "Mijn grootouders hebben een kunstgebit."            
        );
?>    
 <?php for($lvi = 0; $lvi<2; $lvi++){?> 
            <label> <?=$lvvraag[$lvi]?> </label> <input type="text" name="<?="lvvraag{$lvi}"?>" value="" autocomplete="off"><br>
<?php } ?>

<br><h4><b>Wat is het meewerkend voorwerp in de volgende zinnen?</b></h4><br>
<?php 
   $mvvraag = array(
            "Het jongetje gaf een kusje aan zijn moeder.",
            "Mijn vader gaf een bosje bloemen aan mijn moeder."            
        );
?>    
 <?php for($mvi = 0; $mvi<2; $mvi++){?> 
            <label> <?=$mvvraag[$mvi]?> </label> <input type="text" name="<?="mvvraag{$mvi}"?>" value="" autocomplete="off"><br>
<?php } ?>
        
        <br><input type="submit" name="button" value="Invullen">
    </form>
    </div>      
</body>
</html>
