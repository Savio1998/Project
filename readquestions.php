
<!DOCTYPE html>
<html>
<head>
  <title>Engels</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require 'navbar.php'; ?>
 
</head>
<body>
    <h4><span align: center;>
 <form action="readquestions.php" method="get" id="questions">
  <input type="submit" value="Check me" name="Check" />
		
</form>
 <form action="readenglish.php" method="get" id="read">
  <input type="submit" value="Back" name="Back" />
		
</form>
</body>
</html>