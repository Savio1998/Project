<?php session_start();

$vraag = array(
    "01",
    "02",
    "03",
    "04",
    "05",
    "06",
    "07",
    "08",
    "09",
    "10"
);

$antwoord = array(
    "anne frank",
    "cleopatra",
    "adolf hitler",
    "napoleon",
    "gorbachof",
    "anne frank",
    "cleopatra",
    "adolf hitler",
    "napoleon",
    "gorbachof"
    
);

$antwoordoptie = array(
    "Selecteer uw antwoord",
    "anne frank",
    "cleopatra",
    "adolf hitler",
    "napoleon",
    "gorbachof"
    
);

$velden = 3;
$input = 3;
$cookie = "opdr-gesch";
$exitLink = '<META HTTP-EQUIV="Refresh" Content="0; URL=/opdrachten/geschiedenis.php">';

require 'single-antw.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Geschiedenis</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include 'navbar.php'; ?>
</head>
<body>
    <div class = "container">
        
    <h3>Geschiedenis</h3>
    <div class="row">
        <div class="col-md-6">
            <img src="/afbeeldingen/annefrank.jpg">
        </div>
        <div class="col-md-6">
            <?php require 'antw-veld.php'; ?>
        </div>
    </div>
    </div>
    </body>
</html>