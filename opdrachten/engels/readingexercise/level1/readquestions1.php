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
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require '../../../../navbar.php'; ?>
	<title>English reading n1</title>
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
<form action="readenglish1.php" method="POST"  id="mchoice">
	<?	
        for($e = 0; $e < count($vraag); $e++){
        $value[$e] = "";
        }
        $error = false; ?>
         <li>
            <h5>Waar gaat dit artiekel over?</h5>
<input type="radio" name="vraag1" id="1A" value="A"> A) Hoeveel mensen er leven in engeland.<br>
<input type="radio" name="vraag1" id="1B" value="B"> B) De beste manier om engels te leren.<br>
<input type="radio" name="vraag1" id="1C" value="C"> C) Hoeveel mensen engels praten in de UK.<br>
<input type="radio" name="vraag1" id="1D" value="D"> D) Engelse scholen in Engeland en America.<br>
        </li>
           <li>
            <h5>Wat was de gestelde vraag?</h5>
<input type="radio" name="vraag2" id="2A" value="A"> A) welke land is beter America, UK of je eigen land?<br>
<input type="radio" name="vraag2" id="2B" value="B"> B) De UK ligt in America, zit jij ook in America?<br>
<input type="radio" name="vraag2" id="2C" value="C"> C) Hoeveel mensen zijn er in de UK en America? en in je eigen land?<br>
<input type="radio" name="vraag2" id="2D" value="D"> D) Is het beter om engels te leren in UK/America of in je eigen land?<br>
        </li>
        <li>
            <h5>Waarom is het beter om Engels te leren in UK?</h5>
<input type="radio" name="vraag3" id="3A" value="A"> A) Je kan alleen engels praten en niemand spreekt een ander taal<br>
<input type="radio" name="vraag3" id="3B" value="B"> B) Er zijn geen Nederlanders.<br>
<input type="radio" name="vraag3" id="3C" value="C"> C) De scholen zijn beter.<br>
<input type="radio" name="vraag3" id="3D" value="D"> D) Je krijgt geen nederlands dus kan je focusen op alleen engels.<br>
        </li>
        <li>
            <h5>Waar staat UK voor?</h5>
<input type="radio" name="vraag4" id="4A" value="A"> A) United kingdom<br>
<input type="radio" name="vraag4" id="4B" value="B"> B Het staat voor niks het is gewoon UK.<br>
<input type="radio" name="vraag4" id="4C" value="C"> C) Unique Kindom<br>
<input type="radio" name="vraag4" id="4D" value="D"> D) The Umbrella kingdom<br>
        </li>
           <li>
            <h5>Wat doe je als je niet genoeg geld of tijd heb?</h5>
<input type="radio" name="vraag5" id="5A" value="A"> A) Toch naar UK gaan en daar engels leren.<br>
<input type="radio" name="vraag5" id="5B" value="B"> B) Probeer meer engels te praten in de klas.<br>
<input type="radio" name="vraag5" id="5C" value="C"> C) Blijf in nederland en leer engels langzamer<br>
<input type="radio" name="vraag5" id="5D" value="D"> D) Leer engels van videogames en youtube videos.<br>
        </li>
        <li>
            <h5>Wat doe je als je niet genoeg geld of tijd heb?</h5>
<input type="radio" name="vraag6" id="6A" value="A"> A) Toch naar UK gaan en daar engels leren.<br>
<input type="radio" name="vraag6" id="6B" value="B"> B) Probeer meer engels te praten in de klas.<br>
<input type="radio" name="vraag6" id="6C" value="C"> C) Blijf in nederland en leer engels langzamer<br>
<input type="radio" name="vraag6" id="6D" value="D"> D) Leer engels van videogames en youtube videos.<br>
        </li>
           <li>
            <h5>Waar lees je wat de schrijver ervan vindt?</h5>
<input type="radio" name="vraag7" id="7A" value="A"> A) Alinea 1<br>
<input type="radio" name="vraag7" id="7B" value="B"> B) Alinea 2<br>
<input type="radio" name="vraag7" id="7C" value="C"> C) Alinea 3<br>
<input type="radio" name="vraag7" id="7D" value="D"> D) Alinea 4<br>
        </li>
        <li>
            <h5>Waar lees je wat de schrijver ervan vindt?</h5>
<input type="radio" name="vraag8" id="8A" value="A"> A) Alinea 1<br>
<input type="radio" name="vraag8" id="8B" value="B"> B) Alinea 2<br>
<input type="radio" name="vraag8" id="8C" value="C"> C) Alinea 3<br>
<input type="radio" name="vraag8" id="8D" value="D"> D) Alinea 4<br>
        </li>
        <input type="submit" value="Check me" name="check" />
        </form>
        
        <form action="readenglish1.php" method="get" id="read">
                            <input type="submit" value="Back" name="Back" />
            </form>
            </div>
           <div class="col-sm-3">
           <? 
            $answer1 = $_POST['vraag1'];
            $answer2 = $_POST['vraag2'];
            $answer3 = $_POST['vraag3'];
            $answer4 = $_POST['vraag4'];
            $answer5 = $_POST['vraag5'];
            $answer6 = $_POST['vraag6'];
            $answer7 = $_POST['vraag7'];
            $answer8 = $_POST['vraag8'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "C") { $totalCorrect++; }
            if ($answer6 == "B" || $answer6 == "C") { $totalCorrect++; }
            if ($answer7 == "D") { $totalCorrect++; }
            if ($answer8 == "D") { $totalCorrect++; }
            
            $mark = ($totalCorrect * 12.5);
            ?>
          
          <div class="row">
              <h2  
              <?
              if (isset($_POST['submit'])) {
                if ($_POST['vraag1'] == "" || $_POST['vraag2'] == "" || $_POST['vraag3'] == "" || $_POST['vraag4'] == "" || $_POST['vraag5'] == "" || $_POST['vraag6'] == "" || $_POST['vraag7'] == "" || $_POST['vraag8'] == "" ) {
                   $error = true;
                } else {
                    $error = false;
                }
              }
                if ($error) {
                    echo "All fields are required.";
                } else {
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
                    }
                }
              ?>
        ></h2>
        <form action="/opdrachten/engels/readingexercise/level1/readenglish1.php" method="GET" id="read">
                <input type="submit" value="Back" name="Back" />
            </form>
               </div>
</form>

</div>
</body>
</html>  
