<!DOCTYPE html>
<html>
<head>
  <title>Rekenen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require 'navbar.php'; ?>
 
</head>
<body> 
    
<?php  function som(){
        $oav = (rand(1,3));
        $a = (rand(1,10));
        $b = (rand(1,10));
        $vraag = "";
        if($a == $b){
            $a = (rand(1,10));
            $b = (rand(1,10));
        }
    
        if($oav == 1){
            $vraag = "Wat is {$a} + {$b} ?";
            $antwoord = $a + $b;
        } 
        
        else if($oav == 2){
            if($b > $a){
                $vraag = "Wat is {$b} - {$a} ?";
                $antwoord = $b - $a;
            }
            else{
                $vraag = "Wat is {$a} - {$b} ?";
                $antwoord = $a - $b;
            }           
        }
        
        else if($oav == 3){
            $vraag = "Wat is {$a} * {$b} ?";
            $antwoord = $a * $b;
            if($a == 1 || $b == 1){
                $a = (rand(2,10));
                $b = (rand(2,10));
            }
        }

        $arr = array(
            "antwoord"  =>  $antwoord,
            "vraag"     =>  $vraag,
        );

        return $arr;
        }
?>

        <form method="POST">
<?php for($i = 0; $i<10; $i++){
             $s = som(); ?> 
            <label> <?=$s["vraag"]?> </label> <input type="text" name="<?="vraag{$i}"?>" value=""> <?=$s["antwoord"]?><br>
<?php } ?>
        <input type="submit" name="button" value="Ok">
    </form>
    
    
    
</body>
</html>
