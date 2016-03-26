<?php session_start(); ?>
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
  <link rel="stylesheet" type="text/css" href="level1/text.css">
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
                <div class="reading"><h4>
                    Today, millions of people want to learn or improve their English but it is difficult to find the best method. Is it better to study in Britain or America or to study in your own country?

                    The advantages of going to Britain seem obvious. Firstly, you will be able to listen to the language all the time you are in the country. You will be surrounded completely by the language wherever you go. Another advantage is that you have to speak the language if you are with other people. In the Netherlands, it is always possible, in the class, to speak Italian if you want to and the learning is slower.

                    On the other hand, there are also advantages to staying at home to study. You don't have to make big changes to your life. As well as this, it is also a lot cheaper than going to Britain but it is never possible to achieve the results of living in the UK. If you have a good teacher in the Netherlands, I think you can learn in a more concentrated way than being in Britain without going to a school.

                    So, in conclusion, I think that if you have enough time and enough money, the best choice is to spend some time in the UK. This is simply not possible for most people, so being here in the Netherlands is the only viable option. The most important thing to do in this situation is to maximise your opportunities: to speak only English in class and to try to use English whenever possible outside the class.</h4>

                <form action="readquestions1.php" method="get" id="questions">
                    <input type="submit" value="Next" name="Next" />
                    </div>
                </form>
            </div>
        </div>  
    </div>     
</body>
</html>