 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <style>
        li:hover{
            background-color:#ff0000;
        }
        li:active{
            background-color:#ff0000;
        }
        .dropdown-menu>li>a {
            color: #fff;
            background: black;
        }
         .dropdown-menu>li>a:hover {
            color: #fff;
            background: #ff0000;
        }
             ul.dropdown-menu {
             background: black;
        }
        
        .navbar-inverse .navbar-nav>li>a {
             color: white;
        }
    </style>


<nav class="navbar navbar-inverse">
  <div class="container-fluid" style = "height: 120px;">
    <div class="navbar-header">
      <a class="navbar-brand"style = "margin-top:-10px;" href="http://php-ooievaar.appspot.com/">
          <img src="headerimage.png"></img>
      </a>
    </div>
    <ul class="nav navbar-nav">
      <li style="margin-top:30px;"><a href="http://php-ooievaar.appspot.com/">Home</a></li>
      <li style="margin-top:30px;" class="dropdown">
        <a  class="dropdown-toggle" data-toggle="dropdown">Oefeningen
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="rekenen.php">Over ons</a></li>
          <li><a href="nederlands.php">Contact</a></li>
          <li><a href="engels.php">Log uit</a></li>
        </ul>
      </li>
      <li style="margin-top:30px;" ><a href="overons.php">Over ons</a></li> 
      <li style="margin-top:30px;"><a href="contact.php">Contact</a></li> 
    </ul>
  </div>
</nav>