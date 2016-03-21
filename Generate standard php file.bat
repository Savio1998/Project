@echo off
set /p newfile= Hoe moet het bestand heten?
@echo ^<?php > %newfile%.php
@echo session_start()^; ?^> >> %newfile%.php
@echo ^<html^> >> %newfile%.php
@echo ^<head^> >> %newfile%.php
@echo ^<link rel^="stylesheet" type^="text/css" href^="mystyle.css"^> >> %newfile%.php
@echo ^<title^>Title^</title^> >> %newfile%.php
@echo ^<meta charset^="utf-8"^> >> %newfile%.php
@echo ^<meta name^="viewport" content^="width^=device-width, initial-scale^=1"^> >> %newfile%.php
@echo ^<link rel^="stylesheet" href^="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"^> >> %newfile%.php
@echo ^<script src^="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"^>^</script^> >> %newfile%.php
@echo ^<script src^="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"^>^</script^> >> %newfile%.php
@echo ^<?php require 'navbar.php'^; >> %newfile%.php
@echo ^require 'slider.html'^; ?^> >> %newfile%.php
@echo ^</head^> >> %newfile%.php
@echo ^<body^> >> %newfile%.php