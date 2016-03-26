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
 
</head>
<body>
    <div class="container"> 
    <div class="row">
<form action="readscore1.php" method="get" id="mchoice">
		
            <ol>
            
                <li>
                
                    <h4>Waar gaat dit artiekel over?</h4>
                    
                    <div>
                        <input type="radio" name="question1" id="1A" value="A">
                        A) Hoeveel mensen er leven in engeland.<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question1" id="1B" value="B">
                        B) De beste manier om engels te leren.<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question1" id="1C" value="C">
                        C) Hoeveel mensen engels praten in de UK.<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question1" id="1D" value="D">
                        D) Engelse scholen in Engeland en America.<br>
                    </div>
                
                </li>
                 <li>
                
                    <h4>Wat was de gestelde vraag?</h4>
                    
                    <div>
                        <input type="radio" name="question2" id="2A" value="A">
                        A) welke land is beter America, UK of je eigen land?<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question2" id="2B" value="B">
                        B) De UK ligt in America, zit jij ook in America?<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question2" id="2C" value="C">
                        C) Hoeveel mensen zijn er in de UK en America? en in je eigen land?<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question2" id="3D" value="D">
                        D) Is het beter om engels te leren in UK/America of in je eigen land?.<br>
                    </div>
                
                </li>
                
                <li>
                
                    <h4>Waarom is het beter om Engels te leren in UK?</h4>
                    
                    <div>
                        <input type="radio" name="question3" id="3A" value="A">
                        A) Je kan alleen engels praten en niemand spreekt een ander taal.<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question3" id="3B" value="B">
                        B) Er zijn geen Nederlanders.<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question3" id="3C" value="C">
                        C) De scholen zijn beter.<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question3" id="3D" value="D">
                        D) Je krijgt geen nederlands dus kan je focusen op alleen engels.<br>
                    </div>
                
                </li>
                 <li>
                
                    <h4>Waar staat UK voor?</h4>
                    
                    <div>
                        <input type="radio" name="question4" id="4A" value="A">
                        A) United kingdom<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question4" id="4B" value="B">
                        B Het staat voor niks het is gewoon UK.<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question4" id="4C" value="C">
                        C) Unique Kindom<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question4" id="4D" value="D">
                        D) The Umbrella kingdom<br>
                    </div>
                
                </li>
                
                <li>
                
                    <h4>Waarom is het oke om in je eigen land te blijven?</h4>
                    
                    <div>
                        <input type="radio" name="question5" id="5A" value="A">
                        A) Docenten zijn niet goed in de UK<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question5" id="5B" value="B">
                        B) Je moet harder werken in de UK<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question5" id="5C" value="C">
                        C) Je voelt je meer op je gemak bij het studeren.<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question5" id="5D" value="D">
                        D) Je hoeft niet alleen engels te praten.<br>
                    </div>
                
                </li>
                <li>
                
                    <h4>Wat doe je als je niet genoeg geld of tijd heb?</h4>
                    
                    <div>
                        <input type="radio" name="question6" id="6A" value="A">
                        A) Toch naar UK gaan en daar engels leren.<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question6" id="6B" value="B">
                        B) Probeer meer engels te praten in de klas.<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question6" id="6C" value="C">
                        C) Blijf in nederland en leer engels langzamer.<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question6" id="6D" value="D">
                        D) Leer engels van videogames en youtube videos.<br>
                    </div>
                
                </li>
                 <li>
                
                    <h4>Waar lees je wat de schrijver ervan vindt?</h4>
                    
                    <div>
                        <input type="radio" name="question7" id="7A" value="A">
                        A) Alinea 1<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question7" id="7B" value="B">
                        B) Alinea 2<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question7" id="7C" value="C">
                        C) Alinea 3<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question7" id="7D" value="D">
                        D) Alinea 4<br>
                    </div>
                
                </li>
                 <li>
                
                    <h4>In totaal hoeveel argumenten werden gegeven?</h4>
                    
                    <div>
                        <input type="radio" name="question8" id="8A" value="A">
                        A) 2<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question8" id="8B" value="B">
                        B) 4<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question8" id="8C" value="C">
                        C) 6<br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question8" id="8D" value="D">
                        D) 8<br>
                    </div>
                
                </li>
            
            </ol>
             
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