  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <style>
        li.navli:hover{
            background-color:#ff0000;
        }
        li.navli:active{
            background-color:#ff0000;
        }
        .dropdown-menu>li.navli>a {
            color: #fff;
            background: black;
        }
         .dropdown-menu>li.navli>a:hover {
            color: #fff;
            background: #ff0000;
        }
             ul.dropdown-menu {
             background: black;
        }
        
        .navbar-inverse .navbar-nav>li.navli>a {
             color: white;
        }
    </style>


<nav class="navbar navbar-inverse">
  <div class="container-fluid" style = "height: 100px;">
    <div class="navbar-header">
      <a class="navbar-brand"style = "margin-top:-10px;" href="http://php-ooievaar.appspot.com/">
          <img src="/afbeeldingen/headerimage.png"></img>
      </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="navli" style="margin-top:30px;"><a href="/">Home</a></li>
     <?php
        if ($_SESSION['username'] == 'admin') {
     ?>
     
      <li  class="navli"style="margin-top:30px;" class="dropdown">
        <a  class="dropdown-toggle" data-toggle="dropdown">Oefeningen
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="navli"><a href="/opdrachten/rekenen.php">Rekenen</a></li>
          <li class="navli"><a href="/opdrachten/nederlands.php">Nederlands</a></li>
          <li class="navli"><a href="/opdrachten/engels.php">Engels</a></li>
          <li class="navli"><a href="/opdrachten/geschiedenis.php">Geschiedenis</a></li> 
          <li class="navli"><a href="/opdrachten/biologie.php">Biologie</a></li>
          <li class="navli"><a href="/opdrachten/aardrijkskunde.php">Aardrijkskunde</a></li> 
        </ul>
      </li>
      <li class="navli"style="margin-top:30px;" ><a href="\overons.php">Over ons</a></li> 
      <li class="navli"style="margin-top:30px;"><a href="\contact.php">Contact</a></li> 
      
       <?php
          }
      ?>
      
      <?php
        if ($_SESSION['username'] != 'admin') {
         ?>
         <li class="navli"style="margin-top:30px;" ><a href="overons.php">Over ons</a></li> 
      <?php
        }
        ?>
      
      <?php
        if ($_SESSION['username'] == 'admin') {
      ?>
            <li class="navli"><?= $_SESSION['admin']; ?></li>
            <li class="navli"style="margin-top:30px;"><a href="http://php-ooievaar.appspot.com/logout.php">Log uit</a></li>
      <?php
        }
      ?>
    </ul>    
  </div>
</nav>

