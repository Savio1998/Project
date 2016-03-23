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
 
</head>
<body>
    <div class="container"> 
    <div class="row">
<form action="readscore1.php" method="get" id="mchoice">
	<?	questions = array(
        "Waardoor had Rikki's familie financielie problemen?"
        "Voor Hoelang kan Rikki nog zorgen voor zijn familie?"
        "Hoe bescrijft de schrijfer doe gemeente van Chad?"
        ""
        
    );
      
      ?>       
            <input type="submit" value="Check me" name="check" />
		
		</form>
        <form action="readenglish1.php" method="get" id="read">
                <input type="submit" value="Back" name="Back" />
            </form>
    </div>
</form>

</div>
</body>
</html>  
