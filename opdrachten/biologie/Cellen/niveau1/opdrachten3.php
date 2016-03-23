<?php session_start();
    $knop = "invullen";
    $knopingedrukt1 = 0;
    
    
         for($e = 0; $e<20; $e++){
        $eindbericht[$e] = "";
        $tatus[$e] = "incorrect";
         }
    
    if($_POST["button"]){
        
        
        $knopingedrukt = $_POST["knopingedrukt1"];

            
        $knop = "opslaan";
 
  
                    $resultaat = array(
                    $_POST["0"],
                    $_POST["1"],
                    $_POST["2"],
                    $_POST["3"],
                    $_POST["4"],
                    $_POST["5"],
                    $_POST["5"],
                    $_POST["6"],
                    $_POST["7"],
                    $_POST["8"],
                    $_POST["9"],
                    $_POST["10"],
                    $_POST["11"],
                    $_POST["12"],
                    $_POST["13"],
                    $_POST["14"],
                    $_POST["15"],
                    $_POST["16"],
                    $_POST["17"],
                    $_POST["18"],
                    $_POST["19"]
                   
       );   
    
 
    $antwoord = array(
                    "1",
                    "5",
                    "3",
                    "1",
                    "5",
                    "2",
                    "3",
                    "1",
                    "3",
                    "3",
                    "2",
                    "1",
                    "2",
                    "4",
                    "4",
                    "2",
                    "1",
                    "2",
                    "2",
                    "2"
    );
    for ($loopie = 0; $loopie < 20; $loopie++){
    if($resultaat[$loopie] == $antwoord[$loopie]){              
                    $eindbericht[$loopie] = "Goed gedaan!";
                    $tatus[$loopie] = "correct";
                    $nummer[$loopie] = $antwoord[$loopie];
    
    }
                else{
                    $eindbericht[$loopie] = "Helaas, probeer het nog een keer.";
                    $tatus[$loopie] = "incorrect";
                }
    
    }
    
    if($knopingedrukt == 0){
        $knopingedrukt1 = 1;
    }
    if($knopingedrukt == 1){
                
                // setcookie("opdr-bio-cel-n2-opdr2", $score, time() + 86400, "/");
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=/opdrachten/biologie/cellen/niveau1.php">';    
                exit;   
                
            }
            
            }
    
    
  //  print_r($_POST);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cel - Weefsel - Orgaan - Orgaanstelsel of een Organisme</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require '../../../../navbar.php'; ?>
 
  <style>
        select {
            margin-top: 15px;
            margin-right: 15px;
            width:100px;
        }
        input[type="submit"] {
            margin-top:20px;
            margin-left: 20px;
        }
  </style>
 
 
</head>
<body>
    
      <h1>Is het een Cel - Weefsel - Orgaan - Orgaanstelsel of een Organisme</h1>
    <div class = "afbeelding">
        <img src =  "/afbeeldingen/orgaancelweefsel.png" style = "float:left; margin-right:150px;">
    </div>
    
    <form action="opdrachten3.php" method="POST">
    <?php 
          for($i = 0; $i<20; $i++){
    ?>
    <div class = "dropdowns">
    <?php if ($i < 9) {
    echo "0",$i+1;
    } else {
    echo $i+1;
    } ?>
    
            <select name= "<?=$i?>"id ="<?=$i?>">
            <?php if ($tatus[$i] == "incorrect"){  ?>
            
                <option value="x">???</option>
                <option value="1">Weefsel</option>
                <option value="2">Cel</option>
                <option value="3">Orgaan</option>
                <option value="4">Organisme</option>
                <option value="5">Orgaanstelsel</option>
           
           
        </div>
        <?php } else if ( $tatus[$i] == "correct"){?>
        
        <option value="<?= $nummer[$i] ?>">Correct</option>
        
    <?php } 
    ?> </select><?= $eindbericht[$i] ?>
    <?php
    
    } ?>
    
     <input class="hidden" type="text" name="knopingedrukt1" value="<?=$knopingedrukt1?>" >
    
     <br><input type="submit" name="button" value="<?=$knop?>">
     
     
     
   </form>
  
</body>
</html>
