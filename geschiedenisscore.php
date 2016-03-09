<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Geschiedenis score</h1>
		
        <?php
            
            $answer1 = $_GET['question-1-answers'];
            $answer2 = $_GET['question-2-answers'];
            $answer3 = $_GET['question-3-answers'];
            $answer4 = $_GET['question-4-answers'];
            $answer5 = $_GET['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "C") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "C") { $totalCorrect++; }
            
            $totalPercent = $totalCorrect * 20;
            
            echo "<div id='results'>$totalPercent / 100% </div>";
            
        ?>
	
	</div>

</body>

</html>