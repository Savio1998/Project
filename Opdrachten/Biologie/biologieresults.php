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
            "Waarmee plant een schimmel zich voort?",
            "Hebben schimmels celwanden?",
            "Heeft een sporenplant ook bladeren?",
            "Wat voor bladeren hebben de meeste naaktzadige planten?",
            "Heeft een spons een skelet?",
            "Tot welke hoofdgroep van het dierenrijk behoort een poolvos?",
            "Bij welke diergroep kom je segmenten veel tegen?"
        );
        
       $pvresultaat = array(
                    $_POST["pvvraag0"],
                    $_POST["pvvraag1"],
                    $_POST["pvvraag2"],
                    $_POST["pvvraag3"],
                    $_POST["pvvraag4"],
                    $_POST["pvvraag5"],
                    $_POST["pvvraag6"],
                    $_POST["pvvraag7"],
                    $_POST["pvvraag8"],
                    $_POST["pvvraag9"]
       );
        
   $pvantwoord = array(
            "bladgroenkorrels",
            "celkern",
            "eencellig",
            "sporen",
            "ja",
            "ja",
            "naalden",
            "ja",
            "gewervelden",
            "geleedpotige"
        );
        for($pva = 0; $pva<10; $pva++){
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
<form action="biologieresults.php" method="POST">
     <?php for($pvi = 0; $pvi<10; $pvi++){?> 
            <label> <?=$pvvraag[$pvi]?> </label> <input type="text" name="<?="pvvraag{$pvi}"?>" value="<?=$pveindantwoord[$pvi]?>" autocomplete="off"> <?=$pveindbericht[$pvi]?><br>
<?php } ?>
        
        <br><input type="submit" name="button" value="Invullen">
    </form>      
</body>
</html>
