<!DOCTYPE html>
<html>
<head>
  <title>Persoonvorm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require 'navbar.php'; ?>
 
</head>
<body> 
    <div class="container"> 
<h3><b>Persoonsvorm</b></h3><br>
<h4><b> Wat is de persoonsvorm in de volgende zinnen?</b></h4><br>
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
        
        for($a = 0; $a<10; $a++){
        if($resultaat[$a] == $antwoord[$a]){
            $eindantwoord[$a] = $antwoord[$a];
            $eindbericht[$a] = "Goed gedaan!";
            } 
        else{
            $eindantwoord[$a] = "";
            $eindbericht[$a] = "Helaas, probeer het nog een keer.";
        }      
        }
        }
?>

<form action="persoonsvorm.php" method="POST">
     <?php for($i = 0; $i<10; $i++){?> 
            <label> <?=$vraag[$i]?> </label> <input type="text" name="<?="vraag{$i}"?>" value="<?=$eindantwoord[$i]?>" autocomplete="off"> <?=$eindbericht[$i]?><br>
<?php } ?>

        <br><input type="submit" name="button" value="Invullen">
    </form> 
    </div>     
</body>
</html>