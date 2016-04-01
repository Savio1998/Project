<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title>English reading n1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
  <?php require '../../../../navbar.php'; ?>
	<title>English reading n1</title>
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
    <div class ="reading">
    <div class="row"> 
		<h1>Your results</h1>
    
		
        <?php
             $vraag = array(
                "Waardoor had Rikki's familie financielie problemen?",
                "Voor Hoelang kan Rikki nog zorgen voor zijn familie?",
                "Hoe bescrijft de schrijfer doe gemeente van Chad?",
                "Wat gaat Rikki leren om zijn familie te kunnen verzorgen?"
            );
            
             $resultaat = array(
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
               echo "Perfect score <div id='results'>$mark/100</div>";
            } else if($mark >= 90 &&  $mark < 100){
               echo "Amazing <div id='results'>$mark/100</div> good work!";
            } else if($mark >= 80 && $mark < 90){
               echo "<div id='results'>$mark/100</div> Fantastic work! keep practacing for a even higher mark";
            } else if($mark >= 70 && $mark < 80){
               echo "<div id='results'>$mark/100</div> Good work! keep practacing for a even higher mark";
            } else if($mark >= 60 && $mark < 50){
               echo "<div id='results'>$mark/100</div> Good work! keep practacing for a higher mark";
            } else if($mark >= 55 && $mark < 60){
               echo "<div id='results'>$mark/100</div> Barely made it keep practacing for a higher mark";
            } else if($mark <= 50 ){
               echo "<div id='results'>$mark/100</div>  keep practacing for a better mark, if u are having trouble ask your teacher for some help";
            }?>
        ></h2>
        <form action="/level1.php" method="get" id="read">
                <input type="submit" value="Back" name="Back" />
            </form>
            </div>
        </div>
            </div>
	

</body>

</html>