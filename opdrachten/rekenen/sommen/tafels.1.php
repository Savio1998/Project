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
<?  $boobean;
    $showAntwoorden = false; 
?> 

<body>    
<?php 
if(!isset($_POST['kiesTafelKnop']) && !isset($boobean)){  
    echo "<form action="" 
                method="post">";              
        echo "<select name="TafelSelect">";
            for($i = 2; $i <= 12; $i++){ echo "<option value="$i"> $i </option>" }  
        echo "</select>";   
        echo "<input type="submit" 
               name="kiesTafelKnop" 
               value="Ok"/>";
    echo "</form>";
    $boobean = true;
}

if(isset($_POST['kiesTafelKnop']) && $boobean = true){  
    $tafel = $_POST['TafelSelect'];  
    echo "<input type="submit" 
                 name="kiesNieuweTafel" 
                 value="Kies nieuwe tafel">"; 
    echo "<br>";
    echo "Reken uit: "; 

for($i = 1; $i <= 10; $i++){
    echo "<br>";
    
if($i != 10){
    echo "&nbsp;&nbsp;" .$i. " x " .$tafel. " = ";
}
else{
    echo $i. " x " .$tafel. " = ";
}

echo "<input type="text" 
             name="tekstvak[$i]" 
             size="1" 
             maxlength="3" 
             style="text-align: center" 
             class="form-control">" 
             
$antwoord = ($tafel * $i);
$arrayAntwoorden = array();
$arrayAntwoorden[$i] = $antwoord;

    if($showAntwoorden){
        echo "<p style="visibility: visible; display: inline">" .$arrayAntwoorden[$i]. "</p>";
    }
}
echo "<br>";
echo "<input type="submit" name="antwoorden" value="Antwoorden" action="tafels.php">";
}

if($_POST['kiesNieuweTafel']){
    $boobean = false;
}

if($_POST['antwoorden']){
    $showAntwoorden = true;
}
?>
</body>

</html>