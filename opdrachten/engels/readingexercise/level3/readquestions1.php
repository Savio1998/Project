<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title>English reading n3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require '../../../../navbar.php'; ?>
	<title>English reading n3</title>
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
        $error = false;
        $vraag = array(
        "Wat waren de details voor Heyford aanbeveling?",
        "Voor Hoelang kan Rikki nog zorgen voor zijn familie?",
        "Hoe bescrijft de schrijfer doe gemeente van Chad?",
        "Wat gaat Rikki leren om zijn familie te kunnen verzorgen?"
        );
       
	    for($i = 0; $i < count($vraag); $i++){ ?>
        <label> <?=$vraag[$i]?> </label></br><input type="text" name="<?="vraag{$i}"?>" value="<?=$value[$i]?>" autocomplete="off" size="50"><br>
		 <? } ?>
         <ol>
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
                $_POST["vraag3"],

            );
            
            $antwoord = array(
              "Heyford Park",
              "",
              "",
              ""
            );
            
            $answer1 = $resultaat[0];
            $answer2 = $resultaat[1];
            $answer3 = $resultaat[2];
            $answer4 = $resultaat[3];
       
        
            $totalCorrect = 0;
            
            if ($resultaat[0] == $antwoord[0]) { $totalCorrect++; }
            if ($resultaat[1] == $antwoord[1] ) { $totalCorrect++; }
            if ($resultaat[2] == $antwoord[2]) { $totalCorrect++; }
            if ($resultaat[3] == $antwoord[3]) { $totalCorrect++; }
     
            
            $mark = ($totalCorrect * 25);
            ?>
          
          <div class="row">
              <h2  
              <?
              if (isset($_POST['submit'])) {
                if ($_POST['vraag4'] == "" || $_POST['vraag5'] == "" || $_POST['vraag6'] == "" || $_POST['vraag7'] == "") {
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
        <form action="/opdrachten/engels/readingexercise/level3/readenglish1.php" method="GET" id="read">
                <input type="submit" value="Back" name="Back" />
            </form>
               </div>
</form>

</div>
</body>
</html>  
