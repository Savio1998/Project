<?php session_start();


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
        $score = 0;
        $nummer = 0;
        $checknummer = 0;
        $knop = "Invullen";
        $optie1 = "Goed gedaan!";
        $optie2 = "Helaas, het is je niet gelukt.";
        
        
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
            $controle = array(
                $_POST["controle0"],
                $_POST["controle1"],
                $_POST["controle2"],
                $_POST["controle3"],
                $_POST["controle4"],
                $_POST["controle5"],
                $_POST["controle6"],
                $_POST["controle7"],
                $_POST["controle8"],
                $_POST["controle9"],
         );
            
            $nummer1 = $_POST["nummer"];
            $score = $_POST["score"];
            $checknummer = $_POST["check"];
        
        for($a = 0; $a<10; $a++){
            if($nummer1 == 0){
                if($resultaat[$a] == $antwoord[$a]){
                    $eindantwoord[$a] = $antwoord[$a];               
                    $eindbericht[$a] = "Goed gedaan!";
                    $score = $score + 10;
                    $checknummer = $checknummer + 1;
                }
                else{
                    $eindantwoord[$a] = "";
                    $eindbericht[$a] = "Helaas, probeer het nog een keer.";
                }
                if ($checknummer == 10){
                    $nummer = 4;
                    $knop = "Opslaan";
                }else{
                    $nummer = 1;
                    $knop = "Invullen";
                } 
            }
            
            else if($nummer1 == 1){
                if($resultaat[$a] == $antwoord[$a]){
                    $eindantwoord[$a] = $antwoord[$a];
                    $eindbericht[$a] = "Goed gedaan!";
                    if($controle[$a] == $optie1){
                        $score = $score + 0;
                        $checknummer = $checknummer + 0;
                    }
                    else{
                        $score = $score + 6;
                        $checknummer = $checknummer + 1;
                    }                                                                                  
                }                
                else{
                    $eindantwoord[$a] = "";
                    $eindbericht[$a] = "Helaas, probeer het nog een keer.";
                }
                if ($checknummer == 10){
                    $nummer = 4;
                    $knop = "Opslaan";
                }else{
                    $nummer = 2;
                    $knop = "Invullen";
                } 
                 
            }
            
            else if($nummer1 == 2){
                if($resultaat[$a] == $antwoord[$a]){
                    $eindantwoord[$a] = $antwoord[$a];
                    $eindbericht[$a] = "Goed gedaan!";
                    if($controle[$a] == $optie1){
                        $score = $score + 0;
                        $checknummer = $checknummer + 0;
                    }
                    else{
                        $score = $score + 2;
                        $checknummer = $checknummer + 1;
                    }                  
                }                
                else{
                    $eindantwoord[$a] = "";
                    $eindbericht[$a] = "Helaas, het is je niet gelukt.";
                }
                if ($checknummer == 10){
                    $nummer = 4;
                    $knop = "Opslaan";
                }else{
                    $nummer = 3;
                    $knop = "Check antwoorden";
                } 
 
            }
            
            else if($nummer1 == 3){
                if($resultaat[$a] == $antwoord[$a]){
                    $eindantwoord[$a] = $antwoord[$a];
                    $eindbericht[$a] = "Goed gedaan!";
                }                     
                else{
                    $eindantwoord[$a] = $antwoord[$a];                    
                    $eindbericht[$a] = "Helaas, het is je niet gelukt.";
                }
                $nummer = 4;
                $knop = "Opslaan"; 
            }
            
            else if($nummer1 == 4){
                
                setcookie("opdracht1", $score, time() + 86400, "/");
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=/opdrachten/nederlands/zinsontleding/onderwerp/niveau1.php">';    
                exit;   
                
            }
            
                 
        }
        }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Persoonsvorm opdrachten 2</title>
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
<form action="opdrachten2.php" method="POST">
     <?php for($i = 0; $i<10; $i++){
         if($controle[$i] == $optie2) {
             $color = 'style="color:red;"';             
         }else{
            $color = 'style="color:black;"';                         
         }

         ?> 
            <div class="col-md-5"><label><?=$vraag[$i]?></label></div>
            <div class="col-md-3"><input type="text" name="<?="vraag{$i}"?>" value="<?=$eindantwoord[$i]?>" autocomplete="off" <?= $color ?> class="form-control"></div>
            <div class="col-md-4"><?=$eindbericht[$i]?></div>
            <br><br>
            
            
            <input class="hidden" type="text" name="nummer" value="<?=$nummer?>" >
            <input class="hidden" type="text" name="score" value="<?=$score?>">
            <input class="hidden" type="text" name="<?="controle{$i}"?>" value="<?=$eindbericht[$i]?>">
            <input class="hidden" type="text" name="check" value="<?=$checknummer?>">
            
<?php } ?>
</div>
        <br><input type="submit" name="button" value="<?=$knop?>">
    </form>   
    </div>   
</body>
</html>
