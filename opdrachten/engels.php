<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Reading Exercises level 1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require '/../navbar.php'; ?>
 
</head>
<style>
 .opdracht{
 padding-left: 30px;    
 }
 
 .opdracht a:link, a:visited {
    background-color: #ffffff;
    color: black;
    border-style: double;
    padding: 10px 10px 10px 10px;
    margin: 5px 5px 5px 5px;
    text-align: center;	
    text-decoration: none;
    display: inline-block;
    
}


.opdracht a:hover, a:active {
    background-color: green;
    color: white;
    border-style: double;
}
</style>
<body>    
<div class="opdracht">  
<table>
  <tr>
    <td><a href="/opdrachten/engels/readingexercise/level1.php">level 1</a><td>
  </tr>
  <tr>
    <td><a href="/opdrachten/engels/readingexercise/level2.php">level 2</a></td>
  </tr>
  <tr>
    <td><a href="/opdrachten/engels/readingexercise/level3.php">level 3</a></td>
  </tr>
</table>
</div>       
</body>
</html>