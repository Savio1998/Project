<!DOCTYPE html>
<html>
<head>
  <title>Biologie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require 'navbar.php'; ?>
 
</head>
<body> 
<h3><b>Biologie</b></h3><br>
<h4><b>Beantwoord de volgende biologische vragen</b></h4><br>
<?php 
   $pvvraag = array(
            "Welk celonderdeel zorgt ervoor dat een plant z'n eigen voedsel kan maken?",
            "Welk klein orgaantje in een cel regelt alles wat er in de cel moet gebeuren?",
            "Zij bacteriën veelcellig of eencellig?",  
            "Waarmee plant een schimmel zich voort?"`,
            "Hebben schimmels celwanden?",
            "Heeft een sporenplant ook bladeren?",
            "Wat voor bladeren hebben de meeste naaktzadige planten?",
            "Heeft een spons een skelet?",
            "Tot welke hoofdgroep van het dierenrijk behoort een poolvos?",
            "Bij welke diergroep kom je segmenten veel tegen?"
                    
        );
?>
<form action="biologieresults.php" method="POST">
     <?php for($pvi = 0; $pvi<4; $pvi++){?> 
            <label> <?=$pvvraag[$pvi]?> </label> <input type="text" name="<?="pvvraag{$pvi}"?>" value="" autocomplete="off"><br>
<?php } ?>

        
        <br><input type="submit" name="button" value="Invullen">
    </form>      
</body>
</html>
