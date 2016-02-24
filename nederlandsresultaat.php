<!DOCTYPE html>
<html>
<head>
  <title>Nederlands</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require 'navbar.php'; ?>
 
</head>
<body> 
<h3><b>Zinsontleding</b></h3><br>
<h4><b> Wat is de persoonsvorm in de volgende zinnen?</b></h4><br>
<?php 
   $pvvraag = array(
            "Ik fiets naar school.",
            "Ik vier mijn verjaardag.",
            "Jij eet bij je grootouders."            
        );
        
       $pvresultaat = array(
                    $_POST["pvvraag0"],
                    $_POST["pvvraag1"],
                    $_POST["pvvraag2"]
       );
        
   $pvantwoord = array(
            "fiets",
            "vier",
            "eet"
        );
        for($pva = 0; $pva<3; $pva++){
        if($pvresultaat[$pva] == $pvantwoord[$pva]){
            $pveindantwoord[$pva] = $pvantwoord[$pva];
            $pveindbericht[$pva] = "Goed gedaan!";
            } 
        else{
            $pveindantwoord[$pva] = "";
            $pveindbericht[$pva] = "Helaas, probeer het nog een keer.";
        }      
        }
?>
<form action="nederlandsresultaat.php" method="POST">
     <?php for($pvi = 0; $pvi<3; $pvi++){?> 
            <label> <?=$pvvraag[$pvi]?> </label> <input type="text" name="<?="pvvraag{$pvi}"?>" value="<?=$pveindantwoord[$pvi]?>" autocomplete="off"> <?=$pveindbericht[$pvi]?><br>
<?php } ?>
<br><h4><b>Wat is het onderwerp in de volgende zinnen?</b></h4><br>
<?php 
   $ondvraag = array(
            "Ik ga met de bus naar school.",
            "Mijn moeder kookt vanavond.",
            "Morgen hebben wij geen school."            
        );
        $ondresultaat = array(
                    $_POST["ondvraag0"],
                    $_POST["ondvraag1"],
                    $_POST["ondvraag2"]
       );
        
   $ondantwoord = array(
            "ik",
            "mijn moeder",
            "wij"
        );
        for($onda = 0; $onda<3; $onda++){
        if($ondresultaat[$onda] == $ondantwoord[$onda]){
            $ondeindantwoord[$onda] = $ondantwoord[$onda];
            $ondeindbericht[$onda] = "Goed gedaan!";
        } 
        else{
            $ondeindantwoord[$onda] = "";
            $ondeindbericht[$onda] = "Helaas, probeer het nog een keer.";
        }      
        }
        
?>    
 <?php for($ondi = 0; $ondi<3; $ondi++){?> 
            <label> <?=$ondvraag[$ondi]?> </label> <input type="text" name="<?="ondvraag{$ondi}"?>" value="<?=$ondeindantwoord[$ondi]?>" autocomplete="off"> <?=$ondeindbericht[$ondi]?><br>
<?php } ?>

<br><h4><b>Wat is het lijdend voorwerp in de volgende zinnen?</b></h4><br>
<?php 
   $lvvraag = array(
            "Ik geef mijn neefje een cadeau.",
            "Mijn grootouders hebben een kunstgebit."            
        );
        
        $lvresultaat = array(
                    $_POST["lvvraag0"],
                    $_POST["lvvraag1"]
       );
        
   $lvantwoord = array(
            "een cadeau",
            "een kunstgebit"
        );
        for($lva = 0; $lva<2; $lva++){
        if($lvresultaat[$lva] == $lvantwoord[$lva]){
            $lveindantwoord[$lva] = $lvantwoord[$lva];
            $lveindbericht[$lva] = "Goed gedaan!";
        } 
        else{
            $lveindantwoord[$lva] = "";
            $lveindbericht[$lva] = "Helaas, probeer het nog een keer.";
        }      
        }
        
?>    
 <?php for($lvi = 0; $lvi<2; $lvi++){?> 
            <label> <?=$lvvraag[$lvi]?> </label> <input type="text" name="<?="lvvraag{$lvi}"?>" value="<?=$lveindantwoord[$lvi]?>" autocomplete="off"> <?=$lveindbericht[$lvi]?><br>
<?php } ?>

<br><h4><b>Wat is het meewerkend voorwerp in de volgende zinnen?</b></h4><br>
<?php 
   $mvvraag = array(
            "Het jongetje gaf een kusje aan zijn moeder.",
            "Mijn vader gaf een bosje bloemen aan mijn moeder."            
        );
        
        $mvresultaat = array(
                    $_POST["mvvraag0"],
                    $_POST["mvvraag1"]
       );
        
   $mvantwoord = array(
            "zijn moeder",
            "mijn moeder"
        );
        for($mva = 0; $mva<2; $mva++){
        if($mvresultaat[$mva] == $mvantwoord[$mva]){
            $mveindantwoord[$mva] = $mvantwoord[$mva];
            $mveindbericht[$mva] = "Goed gedaan!";
        } 
        else{
            $mveindantwoord[$mva] = "";
            $mveindbericht[$mva] = "Helaas, probeer het nog een keer.";
        }      
        }
        
?>    
 <?php for($mvi = 0; $mvi<2; $mvi++){?> 
            <label> <?=$mvvraag[$mvi]?> </label> <input type="text" name="<?="mvvraag{$mvi}"?>" value="<?=$mveindantwoord[$mvi]?>" autocomplete="off"> <?=$mveindbericht[$mvi]?><br>
<?php } ?>
        
        <br><input type="submit" name="button" value="Invullen">
    </form>      
</body>
</html>
