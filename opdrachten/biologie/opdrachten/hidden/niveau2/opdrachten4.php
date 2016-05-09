<?php session_start();
   
   $vraag = array(
       "01",
       "02",
       "03",
       "04",
       "05",
       "06",
       "07",
       "08",
       "09",
       "10"
   );     
    
    $antwoord = array(
                    "Weefsel",
                    "Orgaanstelsel",
                    "Orgaan",
                    "Weefsel",
                    "Orgaanstelsel",
                    "Cel",
                    "Orgaan",
                    "Weefsel",
                    "Orgaan",
                    "Orgaan"
    );
    
    $antwoordoptie = array(
                    "Selecteer uw antwoord",
                    "Weefsel",
                    "Cel",
                    "Orgaan",
                    "Organisme",
                    "Orgaanstelsel"
    );
    
    $velden = 3;
    $input = 3;
    $cookie = "opdr-bio-cel-n2-opdr2";
    $exitLink = '<META HTTP-EQUIV="Refresh" Content="0; URL=/opdrachten/biologie/cellen/niveau2.php">';
    
   require '/functies/single-antw.php'; 
                
    print_r($_POST);           
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
  
  
 
  
 
 
</head>
<body>
    <div class="container"> 
        
      <h3><b>Is het een Cel - Weefsel - Orgaan - Orgaanstelsel of een Organisme</b></h3><br>
        <div class="row">
            <div class="col-md-5"><h4>Selecteer het goede antwoord.</h4></div><div class="col-md-2"></div><div class="col-md-2"></div><div class="col-md-3"><b>Score:</b> <?=$score?>/100</div>
        </div><br>
      <div class="row">
          
        <div class = "col-md-6">
            <div class = "afbeelding">
            <img class = "img-responsive" src =  "/afbeeldingen/orgaancelweefsel.png" >
            </div>
        </div>
    
    <div class = "col-md-6"><form action="opdrachten4.php" method="POST">
        
    <?php    require '/functies/antw-veld.php'; ?>
     
     
     
   </form></div>
   </div>
   
  
</body>
</html>
