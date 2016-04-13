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
   $pvvraag= array(
            "I make a cake for friend",
            "I love traveling by plane",
            "My sister feels ill"            
        );
?>
<form action="engelsresults.php" method="POST">
     <?php for($pvi = 0; $pvi<3; $pvi++){?> 
            <label> <?=$pvvraag[$pvi]?> </label> <input type="text" name="<?="pvquestion{$pvi}"?>" value="" autocomplete="off"><br>
<?php } ?>
<br><h4><b>What is the topic in the following sentences ?</b></h4><br>
<?php 
   $ondvraag = array(
            "I'll be going to the concert next monday",
            "We are having a party this afternoon",
            "Do we have school tomorrow?"            
        );
?>    
 <?php for($ondi = 0; $ondi<3; $ondi++){?> 
            <label> <?=$ondvraag[$ondi]?> </label> <input type="text" name="<?="ondvraag{$ondi}"?>" value="" autocomplete="off"><br>
<?php } ?>

<br><h4><b>What is the object in the following sentences ?</b></h4><br>
<?php 
    $lvvraag = array(
            "My dad gave me a ticket for the carnival",
            "We will be eating chicken for dinner this afternoon"            
        );
        
?>    
 <?php for($lvi = 0; $lvi<2; $lvi++){?> 
            <label> <?=$lvvraag[$lvi]?> </label> <input type="text" name="<?="lvvraag{$lvi}"?>" value="" autocomplete="off"><br>
<?php } ?>

<br><h4><b>What is the indirect object in the following sentences ?</b></h4><br>
<?php 
   $mvvraag = array(
            "I gave a big present to my parents",
            "Your uncle Gave wanted to give this CD to you"            
        );
?>    
 <?php for($mvi = 0; $mvi<2; $mvi++){?> 
            <label> <?=$mvvraag[$mvi]?> </label> <input type="text" name="<?="mvraag{$mvi}"?>" value="" autocomplete="off"><br>
<?php } ?>
        
        <br><input type="submit" name="button" value="Send">
    </form>
    </div>      
</body>
</html>
