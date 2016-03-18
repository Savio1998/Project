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
        $eindantwoord1[$e] = ""; 
        $eindbericht[$e] = "";
                
        
        }
        $score = 0;
        $nummer = 0;
        $knop = "Invullen";
        $optie1 = "Goed gedaan!";
        $optie2 = "Het is je helaas nog niet helemaal gelukt.";
        $optie3 = "Helaas, probeer het nog een keer.";
        $optie4 = "Het is je helaas niet helemaal gelukt.";
        $optie5 = "Helaas, het is je niet gelukt.";
        
        
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
            $controle1 = array(
                $_POST["controle10"],
                $_POST["controle11"],
                $_POST["controle12"],
                $_POST["controle13"],
                $_POST["controle14"],
                $_POST["controle15"],
                $_POST["controle16"],
                $_POST["controle17"],
                $_POST["controle18"],
                $_POST["controle19"],
         );
            $controle2 = array(
                $_POST["controle20"],
                $_POST["controle21"],
                $_POST["controle22"],
                $_POST["controle23"],
                $_POST["controle24"],
                $_POST["controle25"],
                $_POST["controle26"],
                $_POST["controle27"],
                $_POST["controle28"],
                $_POST["controle29"],
         );
            
            $nummer1 = $_POST["nummer"];
            $score = $_POST["score"];
        
        for($a = 0; $a<10; $a++){
            if($nummer1 == 0){
                if($resultaat[$a] == $antwoord[$a] && $resultaat1[$a] == $antwoord1[$a]){
                    $eindantwoord[$a] = $antwoord[$a];
                    $eindantwoord1[$a] = $antwoord1[$a];
                    $eindbericht[$a] = "Goed gedaan!";
                    $score = $score + 10;
                }
                else if($resultaat[$a] == $antwoord[$a] || $resultaat1[$a] == $antwoord1[$a]){
                    if($resultaat[$a] == $antwoord[$a]){
                        $eindantwoord[$a] = $antwoord[$a];
                        $eindantwoord1[$a] = "";
                        $eindbericht[$a] = "Het is je helaas nog niet helemaal gelukt.";
                        $score = $score + 5;
                    }
                    else{
                        $eindantwoord[$a] = "";
                        $eindantwoord1[$a] = $antwoord1[$a];
                        $eindbericht[$a] = "Het is je helaas nog niet helemaal gelukt.";
                        $score = $score + 5;  
                    }
                }     
                else{
                    $eindantwoord[$a] = "";
                    $eindantwoord1[$a] = "";
                    $eindbericht[$a] = "Helaas, probeer het nog een keer.";
                }
                $nummer = 1;
                $knop = "Invullen"; 
            }
            
            else if($nummer1 == 1){
                if($resultaat[$a] == $antwoord[$a] && $resultaat1[$a] == $antwoord1[$a]){
                    $eindantwoord[$a] = $antwoord[$a];
                    $eindantwoord1[$a] = $antwoord1[$a];
                    $eindbericht[$a] = "Goed gedaan!";
                    if($controle[$a] == $optie2){
                        $score = $score + 3;
                    }
                    else if($controle[$a] == $optie1){
                        $score = $score + 0;
                    }
                    else{
                        $score = $score + 6;
                    }
                                           
                }
                else if($resultaat[$a] == $antwoord[$a] || $resultaat1[$a] == $antwoord1[$a]){
                    if($resultaat[$a] == $antwoord[$a]){
                        $eindantwoord[$a] = $antwoord[$a];
                        $eindantwoord1[$a] = "";
                        $eindbericht[$a] = "Het is je helaas nog niet helemaal gelukt.";
                        if($controle[$a] == $optie3){
                            $score = $score + 3;
                        }
                        else{
                           $score = $score + 0; 
                        }
                    }
                    else{
                        $eindantwoord[$a] = "";
                        $eindantwoord1[$a] = $antwoord1[$a];
                        $eindbericht[$a] = "Het is je helaas nog niet helemaal gelukt.";
                        if($controle[$a] == $optie3){
                            $score = $score + 3;
                        }
                        else{
                           $score = $score + 0; 
                        }
                    }
                }     
                else{
                    $eindantwoord[$a] = "";
                    $eindantwoord1[$a] = "";
                    $eindbericht[$a] = "Helaas, probeer het nog een keer.";
                }
                $nummer = 2;
                $knop = "Invullen"; 
            }
            
            else if($nummer1 == 2){
                if($resultaat[$a] == $antwoord[$a] && $resultaat1[$a] == $antwoord1[$a]){
                    $eindantwoord[$a] = $antwoord[$a];
                    $eindantwoord1[$a] = $antwoord1[$a];
                    $eindbericht[$a] = "Goed gedaan!";
                    if($controle[$a] == $optie2){
                        $score = $score + 1;
                    }
                    else if($controle[$a] == $optie1){
                        $score = $score + 0;
                    }
                    else{
                        $score = $score + 2;
                    }
                }
                else if($resultaat[$a] == $antwoord[$a] || $resultaat1[$a] == $antwoord1[$a]){
                    if($resultaat[$a] == $antwoord[$a]){
                        $eindantwoord[$a] = $antwoord[$a];
                        $eindantwoord1[$a] = "";
                        $eindbericht[$a] = "Het is je helaas niet helemaal gelukt.";
                        if($controle[$a] == $optie3){
                            $score = $score + 1;
                        }
                        else{
                           $score = $score + 0; 
                        }
                    }
                    else{
                        $eindantwoord[$a] = "";
                        $eindantwoord1[$a] = $antwoord1[$a];
                        $eindbericht[$a] = "Het is je helaas niet helemaal gelukt.";
                        if($controle[$a] == $optie3){
                            $score = $score + 1;
                        }
                        else{
                           $score = $score + 0; 
                        }  
                    }
                }     
                else{
                    $eindantwoord[$a] = "";
                    $eindantwoord1[$a] = "";
                    $eindbericht[$a] = "Helaas, het is je niet gelukt.";
                }
                $nummer = 3;
                $knop = "Check antwoorden"; 
            }
            
            else if($nummer1 == 3){
                if($resultaat[$a] == $antwoord[$a] && $resultaat1[$a] == $antwoord1[$a]){
                    $eindantwoord[$a] = $antwoord[$a];
                    $eindantwoord1[$a] = $antwoord1[$a];
                    $eindbericht[$a] = "Goed gedaan!";
                }
                else if($resultaat[$a] == $antwoord[$a] || $resultaat1[$a] == $antwoord1[$a]){
                    if($resultaat[$a] == $antwoord[$a]){
                        $eindantwoord[$a] = $antwoord[$a];
                        $eindantwoord1[$a] = $antwoord1[$a];
                        $eindbericht[$a] = "Het is je helaas niet helemaal gelukt.";
                        
                    }
                    else{
                        $eindantwoord[$a] = $antwoord[$a];
                        $eindantwoord1[$a] = $antwoord1[$a];
                        $eindbericht[$a] = "Het is je helaas niet helemaal gelukt.";
                          
                    }
                }     
                else{
                    $eindantwoord[$a] = $antwoord[$a];
                    $eindantwoord1[$a] = $antwoord1[$a];
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
     <?php for($i = 0; $i<10; $i++){
         if($controle[$i] == $optie5) {
             $color = 'style="color:red;"';
             $color1 = 'style="color:red;"';
         }else if($controle[$i] == $optie4){
             if($controle1[$i] == ""){
                 $color = 'style="color:red;"';
                 $color1 = 'style="color:black;"';
             }else{
                 $color = 'style="color:black;"';
                 $color1 = 'style="color:red;"';
             }
             
         }else{
            $color = 'style="color:black;"';
            $color1 = 'style="color:black;"';             
         }

         ?> 
            <div class="col-md-5"><label><?=$vraag[$i]?></label></div>
            <div class="col-md-2"><input type="text" name="<?="vraag{$i}"?>" value="<?=$eindantwoord[$i]?>" autocomplete="off" <?= $color ?> class="form-control"></div>
            <div class="col-md-2"><input type="text" name="<?="vraag1{$i}"?>" value="<?=$eindantwoord1[$i]?>" autocomplete="off" <?= $color1 ?> class="form-control"></div>
            <div class="col-md-3"><?=$eindbericht[$i]?></div>
            <br><br>
            
            
            <input class="hidden" type="text" name="nummer" value="<?=$nummer?>" >
            <input class="hidden" type="text" name="score" value="<?=$score?>">
            <input class="hidden" type="text" name="<?="controle{$i}"?>" value="<?=$eindbericht[$i]?>">
            <input class="hidden" type="text" name="<?="controle1{$i}"?>" value="<?=$eindantwoord[$i]?>">
            <input class="hidden" type="text" name="<?="controle2{$i}"?>" value="<?=$eindantwoord1[$i]?>">
            
<?php } ?>
</div>
        <br><input type="submit" name="button" value="<?=$knop?>">
    </form>   
    </div>   
</body>
</html>
