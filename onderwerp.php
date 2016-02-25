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
  <?php require 'navbar.php'; ?>
 
</head>
<body> 
<h3><b>Onderwerp</b></h3><br>
<h4><b>Geef de persoonvorm en het onderwerp.</b></h4><br>
<?php 

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
        for($e = 0; $e<10; $e++){
        $eindantwoord[$e] = "";
        $eindantwoord1[$e] = ""; 
        $eindbericht[$e] = "";
        
        }
        
        if($_POST["button"]){
            
            $resultaat = array(
                    $_POST["vraag0"],
                    $_POST["vraag1"],
                    $_POST["vraag2"],
                    $_POST["vraag3"],
                    $_POST["vraag4"],
                    $_POST["vraag5"],
                    $_POST["vraag6"],
                    $_POST["vraag7"],
                    $_POST["vraag8"],
                    $_POST["vraag9"]
       );
       
            $resultaat1 = array(
                    $_POST["vraag10"],
                    $_POST["vraag11"],
                    $_POST["vraag12"],
                    $_POST["vraag13"],
                    $_POST["vraag14"],
                    $_POST["vraag15"],
                    $_POST["vraag16"],
                    $_POST["vraag17"],
                    $_POST["vraag18"],
                    $_POST["vraag19"]
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
            $antwoord1 = array(
                    "ik",
                    "ik",
                    "jij",
                    "ik",
                    "mijn moeder",
                    "wij",
                    "ik",
                    "mijn grootouders",
                    "het jongetje",
                    "mijn vader"
        );
        
        for($a = 0; $a<10; $a++){
        if($resultaat[$a] == $antwoord[$a] && $resultaat1[$a] == $antwoord1[$a]){
            $eindantwoord[$a] = $antwoord[$a];
            $eindantwoord1[$a] = $antwoord1[$a];
            $eindbericht[$a] = "Goed gedaan!";
            }
        else if($resultaat[$a] == $antwoord[$a] || $resultaat1[$a] == $antwoord1[$a]){
            if($resultaat[$a] == $antwoord[$a]){
               $eindantwoord[$a] = $antwoord[$a];
               $eindantwoord1[$a] = "";
               $eindbericht[$a] = "Het is je helaas nog niet helemaal gelukt";
            }
            else{
               $eindantwoord[$a] = "";
               $eindantwoord1[$a] = $antwoord1[$a];
               $eindbericht[$a] = "Het is je helaas nog niet helemaal gelukt";  
            }
        }     
        else{
            $eindantwoord[$a] = "";
            $eindantwoord1[$a] = "";
            $eindbericht[$a] = "Helaas, probeer het nog een keer.";
        }      
        }
        }
?>
<form action="onderwerp.php" method="POST">
     <?php for($i = 0; $i<10; $i++){?> 
            <label> <?=$vraag[$i]?> </label> <input type="text" name="<?="vraag{$i}"?>" value="<?=$eindantwoord[$i]?>" autocomplete="off"> <input type="text" name="<?="vraag1{$i}"?>" value="<?=$eindantwoord1[$i]?>" autocomplete="off"> <?=$eindbericht[$i]?><br>
<?php } ?>

        <br><input type="submit" name="button" value="Invullen">
    </form>      
</body>
</html>