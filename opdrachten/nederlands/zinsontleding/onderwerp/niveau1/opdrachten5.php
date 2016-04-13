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
        for($e = 0; $e<10; $e++){
        $eindantwoord[$e] = "";
        $eindantwoord1[$e] = ""; 
        $eindbericht[$e] = "";
                
        
        }
        $score = 0;
        $nummer = 0;
        $checknummer = 0;
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
            
            $nummer1 = $_POST["nummer"];
            $score = $_POST["score"];
            $checknummer = $_POST["check"];
        
        require 'opdrachten4.php';
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
<form action="opdrachten5.php" method="POST">
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
            <input class="hidden" type="text" name="check" value="<?=$checknummer?>">
            
<?php } ?>
</div>
        <br><input type="submit" name="button" value="<?=$knop?>">
    </form>   
    </div>   
</body>
</html>
