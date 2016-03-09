<!DOCTYPE html>
<html>
<head>
  <title>Engels</title>
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
<h3><b>Analysis</b></h3><br>
<h4><b> What is the verb in the following sentences ?</b></h4><br>
<?php 
   $pvvraag = array(
            "I make a cake for friend",
            "I love traveling by plane",
            "My sister feels ill"       
        );
        
       $pvresultaat = array(
                    $_POST["pvvraag0"],
                    $_POST["pvvraag1"],
                    $_POST["pvvraag2"]
       );
        
   $pvantwoord = array(
            "make",
            "traveling",
            "feels"
        );
        for($pva = 0; $pva<3; $pva++){
        if($pvresultaat[$pva] == $pvantwoord[$pva]){
            $pveindantwoord[$pva] = $pvantwoord[$pva];
            $pveindbericht[$pva] = "Good Job!";
            } 
        else{
            $pveindantwoord[$pva] = "";
            $pveindbericht[$pva] = "Wrong, try again.";
        }      
        }
?>
<form action="engelsresults.php" method="POST">
     <?php for($pvi = 0; $pvi<3; $pvi++){?> 
            <label> <?=$pvvraag[$pvi]?> </label> <input type="text" name="<?="pvvraag{$pvi}"?>" value="<?=$pveindantwoord[$pvi]?>" autocomplete="off"> <?=$pveindbericht[$pvi]?><br>
<?php } ?>
<br><h4><b>What is the topic in the following sentences ?</b></h4><br>
<?php 
   $ondvraag = array(
            "I'll be going to the concert next monday",
            "We are having a party this afternoon",
            "Do we have school tomorrow?"            
        );
        $ondresultaat = array(
                    $_POST["ondvraag0"],
                    $_POST["ondvraag1"],
                    $_POST["ondvraag2"]
       );
        
   $ondantwoord = array(
            "I",
            "we",
            "we"
        );
        for($onda = 0; $onda<3; $onda++){
        if($ondresultaat[$onda] == $ondantwoord[$onda]){
            $ondeindantwoord[$onda] = $ondantwoord[$onda];
            $ondeindbericht[$onda] = "Good Job!";
        } 
        else{
            $ondeindantwoord[$onda] = "";
            $ondeindbericht[$onda] = "Wrong, try again.";
        }      
        }
        
?>    
 <?php for($ondi = 0; $ondi<3; $ondi++){?> 
            <label> <?=$ondvraag[$ondi]?> </label> <input type="text" name="<?="ondvraag{$ondi}"?>" value="<?=$ondeindantwoord[$ondi]?>" autocomplete="off"> <?=$ondeindbericht[$ondi] ?> <br>
<?php } ?>

<br><h4><b>What is the object in the following sentences ?</b></h4><br>
<?php 
   $lvvraag = array(
            "My dad gave me a ticket for the carnival",
            "We will be eating chicken for dinner this afternoon"            
        );
        
        $lvresultaat = array(
                    $_POST["lvvraag0"],
                    $_POST["lvvraag1"]
       );
        
   $lvantwoord = array(
            "a ticket",
            "chicken"
        );
        for($lva = 0; $lva<2; $lva++){
        if($lvresultaat[$lva] == $lvantwoord[$lva]){
            $lveindantwoord[$lva] = $lvantwoord[$lva];
            $lveindbericht[$lva] = "Good Job!";
        } 
        else{
            $lveindantwoord[$lva] = "";
            $lveindbericht[$lva] = "Wrong, try again.";
        }      
        }
        
?>    
 <?php for($lvi = 0; $lvi<2; $lvi++){?> 
            <label> <?=$lvvraag[$lvi]?> </label> <input type="text" name="<?="lvvraag{$lvi}"?>" value="<?=$lveindantwoord[$lvi]?>" autocomplete="off"> <?=$lveindbericht[$lvi]?><br>
<?php } ?>

<br><h4><b>What is the indirect object in the following sentences ?</b></h4><br>
<?php 
   $mvvraag = array(
            "I gave a big present to my parents",
            "Your uncle gave wanted to give this CD to you"           
        );
        
        $mvresultaat = array(
                    $_POST["mvvraag0"],
                    $_POST["mvvraag1"]
       );
        
   $mvantwoord = array(
            "my parents",
            "your uncle"
        );
        for($mva = 0; $mva<2; $mva++){
        if($mvresultaat[$mva] == $mvantwoord[$mva]){
            $mveindantwoord[$mva] = $mvantwoord[$mva];
            $mveindbericht[$mva] = "Good Job!";
        } 
        else{
            $mveindantwoord[$mva] = "";
            $mveindbericht[$mva] = "Wrong, try again.";
        }      
        }
        
?>    
 <?php for($mvi = 0; $mvi<2; $mvi++){?> 
            <label> <?=$mvvraag[$mvi]?> </label> <input type="text" name="<?="mvvraag{$mvi}"?>" value="<?=$mveindantwoord[$mvi]?>" autocomplete="off"> <?=$mveindbericht[$mvi]?><br>
<?php } ?>
        
        <br><input type="submit" name="button" value="Send">
    </form>
    </div>      
</body>
</html>
