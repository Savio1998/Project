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
            
            $answer1 = $_GET['question1'];
            $answer2 = $_GET['question2'];
            $answer3 = $_GET['question3'];
            $answer4 = $_GET['question4'];
            $answer5 = $_GET['question5'];
            $answer6 = $_GET['question6'];
            $answer7 = $_GET['question7'];
            $answer8 = $_GET['question8'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "C") { $totalCorrect++; }
            if ($answer6 == "B" || $answer6 == "C") { $totalCorrect++; }
            if ($answer7 == "D") { $totalCorrect++; }
            if ($answer8 == "D") { $totalCorrect++; }
            
            $mark = ($totalCorrect * 12.5) / 10;
            ?>
          
          <div class="row">
              <h2  
              <?
            if($mark == 10){
               echo "Perfect score 10/10";
            } else if($mark >= 9 &&  $mark < 10){
               echo "Amazing <div id='results'>$mark /10</div> good work!";
            } else if($mark >= 8 && $mark < 9){
               echo "<div id='results'>$mark /10</div> Fantastic work! keep practacing for a even higher mark";
            } else if($mark >= 7 && $mark < 8){
               echo "<div id='results'>$mark /10</div> Good work! keep practacing for a even higher mark";
            } else if($mark >= 6 && $mark < 5){
               echo "<div id='results'>$mark /10</div> Good work! keep practacing for a higher mark";
            } else if($mark >= 5.5 && $mark < 6){
               echo "<div id='results'>$mark /10</div> Barely made it keep practacing for a higher mark";
            } else if($mark < 5){
               echo "<div id='results'>$mark /10</div>  keep practacing for a better mark, if u are having trouble ask your teacher for some help";
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