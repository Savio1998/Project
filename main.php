<!DOCTYPE html>
<html>
<head>
  <title>php opdrachten</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php include 'navbar.php'; ?>
 
</head>
    <body>
 <!-- it works the same with all jquery version from 1.x to 2.x -->
<script src="jquery.min.js"></script>
<script src="jssor.slider.mini.js"></script>
<script>
    jQuery(document).ready(function ($) {
        //Define an array of slideshow transition code
        var _SlideshowTransitions = [
        { code1 },
        { code2 },
        { code3 }
        ];
        var options = {
            $AutoPlay: true,
            $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: _SlideshowTransitions,
                    $TransitionsOrder: 1,
                    $ShowLink: true
                }
        };
        var jssor_slider1 = new $JssorSlider$('slider1_container', options);
    });
</script>

<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px;">
    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 600px; height: 300px;">
        <div><img u="image" src="02.jpg" /></div>
        <div><img u="image" src="04.jpg" /></div>
    </div>
</div>

     <?php 
        echo "<h1>hellow world!</h1>";
    ?>   
    </body>
</html>
