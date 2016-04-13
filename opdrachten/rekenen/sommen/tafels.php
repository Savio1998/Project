<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>Tafels</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php require 'navbar.php'; ?>
    
    <style>
        input.form-control {
            width: 50px;
            display: inline;
        }
    </style>

</head>

    <?php     
    $tafelGekozen;
    $showAntwoorden = false;  
    
    function tafelsMaken($tafel){
        echo "Reken uit: "; 
        for($i = 1; $i <= 10; $i++){
            echo "<br>";
            if($i != 10){
                echo "&nbsp;&nbsp;" .$i. " x " .$tafel. " = ";
            }
            else{
                echo $i. " x " .$tafel. " = ";
            }?>
            <input type="text" name="tekstvak<?=$i?>" size="1" maxlength="3" style="text-align: center" class="form-control"> 
        <?  $antwoord = ($tafel * $i);
            $arrayAntwoorden = array();
            $arrayAntwoorden[$i] = $antwoord;
            if($showAntwoorden){
                ?><p style="visibility: visible; display: inline"> <?=$arrayAntwoorden[$i]?></p><?
            }
        }
    }
    
    function tafelsKiezen(){
        $tafelGekozen = true; ?>
        <form action="" method="post">  

        <h2> Kies je tafel: </h2>          
        <select name="TafelSelect"><?    
            for($i = 2; $i <= 12; $i++){?> <option value="<?=$i?>"> <?=$i?> </option> <? } ?>
        </select>

        <input type="submit" name="kiesTafelKnop" value="Ok"/>
    </form>  
    <? } ?>
    
<body> 
    <?php if(!isset($_POST['kiesTafelKnop']) && !isset($tafelGekozen) || $tafelGekozen = false){
        tafelsKiezen();
    }
    
    if($_POST['kiesTafelKnop'] && $tafelGekozen = true){  
        $tafel = $_POST['TafelSelect'];  
        ?><input type="submit" name="kiesNieuweTafel" value="Kies nieuwe tafel"><?
        echo "<br>";
        tafelsMaken($tafel);
        echo "<br>";
        ?><input type="submit" name="antwoorden" value="Antwoorden" action="tafels.php"><?
    }
    if($_POST['kiesNieuweTafel']){
        $tafelGekozen = false;
        
    }
    if($_POST['antwoorden']){
        $showAntwoorden = true;
    }?>
</body>
</html>