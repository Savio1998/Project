<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title>English reading n2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require '../../../../navbar.php'; ?>
	<title>English reading n2</title>
</head>
  <style>
    div.reading {
    border: 2px solid black;
    padding: 50px;
    padding-left: 120px;
    padding-right: 120px;
    text-align: justify;
    background-color: whitesmoke;
    line-height: 1.5;
    }
    </style>
</head>
<body>
    <div class="container"> 
        <div class="row">
        <div class="col-sm-6">
<form action="readquestions1.php" method="POST"  id="mchoice">
	<?	
        for($e = 0; $e < count($vraag); $e++){
        $value[$e] = "";
        }
        
        $vraag = array(
        "Waardoor had Rikki's familie financielie problemen?",
        "Voor Hoelang kan Rikki nog zorgen voor zijn familie?",
        "Hoe bescrijft de schrijfer doe gemeente van Chad?",
        "Wat gaat Rikki leren om zijn familie te kunnen verzorgen?"
        );
       
	    for($i = 0; $i < count($vraag); $i++){ ?>
        <label> <?=$vraag[$i]?> </label></br><input type="text" name="<?="vraag{$i}"?>" value="<?=$value[$i]?>" autocomplete="off" size="50"><br>
		 <? } ?>
         <ol>
             <h4>True, False of staat het niet in de tekst?</h4>
         <li>
            <h5>Rikki spendeerde wat tijd in Engeland</h5>
<input type="radio" name="vraag4" id="1A" value="A"> A) True<br>
<input type="radio" name="vraag4" id="1B" value="B"> B) False<br>
<input type="radio" name="vraag4" id="1C" value="C"> C) Not written in text<br>

        </li>
        <li>
            <h5>Te weining regen was de enige reden dat de rivier level zakte</h5>
<input type="radio" name="vraag5" id="1A" value="A"> A) True<br>
<input type="radio" name="vraag5" id="1B" value="B"> B) False<br>
<input type="radio" name="vraag5" id="1C" value="C"> C) Not written in text<br>
        </li>
        <li>
            <h5>Rikki vind dat de regering ze meer moeten helpen</h5>
<input type="radio" name="vraag6" id="1A" value="A"> A) True<br>
<input type="radio" name="vraag6" id="1B" value="B"> B) False<br>
<input type="radio" name="vraag6" id="1C" value="C"> C) Not written in text<br>
        </li>
                <li>
            <h5>Angela wilt dat de regering de rivier red</h5>
<input type="radio" name="vraag7" id="1A" value="A"> A) True<br>
<input type="radio" name="vraag7" id="1B" value="B"> B) False<br>
<input type="radio" name="vraag7" id="1C" value="C"> C) Not written in text<br>
        </li>
        <input type="submit" value="Check me" name="check" />
        </form>
        
        <form action="readenglish1.php" method="get" id="read">
                            <input type="submit" value="Back" name="Back" />
            </form>
            </div>
           <div class="col-sm-3">
           <?   $resultaat = array(
                $_POST["vraag0"],
                $_POST["vraag1"],
                $_POST["vraag2"],
                $_POST["vraag3"]
            );
            
            $antwoord = array(
              "de rivier wordt kleiner", "Lake Chad wordt kleiner", "vissen wordt steeds erger en erger", "De huur gaat niet omlaag",
              "6 maanden", "6maanden", "maar 6 maanden", "6 maanden nog",
              "machteloos", "zwak boot gevangen in een storm", "machteloos boot gevangen in een storm van politiek", "zwakke boot",
              "autoreparatie", "reparatietechniek", "hoe je auto's repareerd", "hoe je een auto kan repareren"
            );
            
            $answer1 = $resultaat[0];
            $answer2 = $resultaat[1];
            $answer3 = $resultaat[2];
            $answer4 = $resultaat[3];
            $answer5 = $_POST['vraag4'];
            $answer6 = $_POST['vraag5'];
            $answer7 = $_POST['vraag6'];
            $answer8 = $_POST['vraag7'];
        
            $totalCorrect = 0;
            
            if ($resultaat[0] == $antwoord[0] || $resultaat[0] == $antwoord[1] || $resultaat[0] == $antwoord[2] || $resultaat[0] == $antwoord[3]) { $totalCorrect++; }
            else if($resultaat[0] !== $antwoord[0] && $resultaat[0] !== $antwoord[1] && $resultaat[0] !== $antwoord[2] && $resultaat[0] !== $antwoord[3] && $resultaat[0] !== ""){ $value = "Incorrectly try again, read carefully!";}
            if ($resultaat[1] == $antwoord[4] || $resultaat[1] == $antwoord[5] || $resultaat[1] == $antwoord[6] || $resultaat[1] == $antwoord[7]) { $totalCorrect++; }
            if ($resultaat[2] == $antwoord[8] || $resultaat[2] == $antwoord[9] || $resultaat[2] == $antwoord[10] || $resultaat[2] == $antwoord[11]) { $totalCorrect++; }
            if ($resultaat[3] == $antwoord[12] || $resultaat[3] == $antwoord[13] || $resultaat[3] == $antwoord[14] || $resultaat[3] == $antwoord[14]) { $totalCorrect++; }
            if ($answer5 == "C") { $totalCorrect++; }
            if ($answer6 == "A") { $totalCorrect++; }
            if ($answer7 == "A") { $totalCorrect++; }
            if ($answer8 == "B") { $totalCorrect++; }
            
            $mark = ($totalCorrect * 12.5);
            ?>
          
          <div class="row">
              <h2  
              <?
            if($mark == 100){
               echo "Perfect score <div id='results'>$mark/100";
            } else if($mark >= 90 &&  $mark < 100){
               echo "Amazing <div id='results'>$mark/100 good work!";
            } else if($mark >= 80 && $mark < 90){
               echo "<div id='results'>$mark/100";
            } else if($mark >= 70 && $mark < 80){
               echo "<div id='results'>$mark/100";
            } else if($mark >= 60 && $mark < 50){
               echo "<div id='results'>$mark/100";
            } else if($mark >= 55 && $mark < 60){
               echo "<div id='results'>$mark/100";
            } else if($mark <= 50 ){
               echo "<div id='results'>$mark/100";
            }?>
        ></h2>
        <form action="/level1.php" method="GET" id="read">
                <input type="submit" value="Back" name="Back" />
            </form>
               </div>
</form>

</div>
</body>
</html>  
