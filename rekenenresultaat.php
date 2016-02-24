
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
<?php 
print_r($_POST);
           
        $vraag = array(
            $_POST["vraagextra0"],
            $_POST["vraagextra1"],
            $_POST["vraagextra2"],
            $_POST["vraagextra3"],
            $_POST["vraagextra4"],
            $_POST["vraagextra5"],
            $_POST["vraagextra6"],
            $_POST["vraagextra7"],
            $_POST["vraagextra8"],
            $_POST["vraagextra9"]            
        );   
           
       $vraagingevuld = array(
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
        
   $antwoord1 = array(
            $_POST["antwoord0"],
            $_POST["antwoord1"],
            $_POST["antwoord2"],
            $_POST["antwoord3"],
            $_POST["antwoord4"],
            $_POST["antwoord5"],
            $_POST["antwoord6"],
            $_POST["antwoord7"],
            $_POST["antwoord8"],
            $_POST["antwoord9"]
        );
        
         
        
         
        
         
        
        for($a = 0; $a<10; $a++){
        if($vraagingevuld[$a] == $antwoord1[$a]){
            $eindantwoord[$a] = $antwoord1[$a];
            $eindbericht[$a] = "Goed gedaan!";
            } 
        else{
            $eindantwoord[$a] = "";
            $eindbericht[$a] = "Helaas, probeer het nog een keer.";
        }      
        }
        
         
        
        
        
        
        
       function som(){
        $oav = array(
            $_POST["nummer0"],
            $_POST["nummer1"],
            $_POST["nummer2"],
            $_POST["nummer3"],
            $_POST["nummer4"],
            $_POST["nummer5"],
            $_POST["nummer6"],
            $_POST["nummer7"],
            $_POST["nummer8"],
            $_POST["nummer9"]
        );
        $a = array(
            $_POST["cijfer10"],
            $_POST["cijfer11"],
            $_POST["cijfer12"],
            $_POST["cijfer13"],
            $_POST["cijfer14"],
            $_POST["cijfer15"],
            $_POST["cijfer16"],
            $_POST["cijfer17"],
            $_POST["cijfer18"],
            $_POST["cijfer19"]
        );
        $b = array(
            $_POST["cijfer20"],
            $_POST["cijfer21"],
            $_POST["cijfer22"],
            $_POST["cijfer23"],
            $_POST["cijfer24"],
            $_POST["cijfer25"],
            $_POST["cijfer26"],
            $_POST["cijfer27"],
            $_POST["cijfer28"],
            $_POST["cijfer29"]
        );
        $vraag = "";
        
        for($e = 0; $e<10; $e++){    
        if($oav[$e] == 1){
            $vraag[$e] = "Wat is {$a[$e]} + {$b[$e]} ?";
            $antwoord[$e] = $a[$e] + $b[$e];
        } 
        
        else if($oav[$e] == 2){
            if($b[$e] > $a[$e]){
                $vraag[$e] = "Wat is {$b[$e]} - {$a[$e]} ?";
                $antwoord[$e] = $b[$e] - $a[$e];
            }
            else{
                $vraag[$e] = "Wat is {$a[$e]} - {$b[$e]} ?";
                $antwoord[$e] = $a[$e] - $b[$e];
            }           
        }
        
        else if($oav[$e] == 3){
            $vraag[$e] = "Wat is {$a}[$e] * {$b}[$e] ?";
            $antwoord[$e] = $a[$e] * $b[$e];
           }
       
        
        

        $arr = array(
            "antwoord"  =>  $antwoord[$e],
            "vraag"     =>  $vraag[$e],
            "nummer"    =>  $oav[$e],
            "cijfer1"   =>  $a[$e],
            "cijfer2"   =>  $b[$e]
        );

        return $arr;
        }
       }
       
?>
<form action="rekenenresultaat.php" method="POST">
     <?php for($i = 0; $i<10; $i++){ 
         
         $s = som(); ?>            

            <label hidden> ... </label> <input class="hidden" type="text" name="<?="nummer{$i}"?>" value="<?=$s["nummer"]?>">
            <label hidden> ~~~ </label> <input class="hidden" type="text" name="<?="cijfer1{$i}"?>" value="<?=$s["cijfer1"]?>">
            <label hidden> ``` </label> <input class="hidden" type="text" name="<?="cijfer2{$i}"?>" value="<?=$s["cijfer2"]?>">
            <label> <?=$s["vraag"]?> </label> <input type="text" name="<?="vraag{$i}"?>" value="<?=$eindantwoord[$i]?>"> <?=$eindbericht[$i]?>
            <label hidden> --- </label> <input class="hidden" type="text" name="<?="vraagextra{$i}"?>" value="<?=$s["vraag"]?>">            
            <label hidden> <?=$s["antwoord"]?> </label> <input class="hidden" type="text" name="<?="antwoord{$i}"?>" value="<?=$s["antwoord"]?>"><br>
            
<?php } ?>
        
        <br><input type="submit" name="button" value="Invullen">
    </form>      
</body>
</html>
