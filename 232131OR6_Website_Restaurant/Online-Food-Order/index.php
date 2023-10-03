<?php
session_start();
?>

<html>

  <head>
    <title> Home | Cepmek </title>
  </head>
 <style>
body {
 
  background-image: url('images/background.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

}
</style> 

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">

  <body>
  <script
	  src="https://code.jquery.com/jquery-3.4.1.min.js"
	  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  crossorigin="anonymous"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Cepmek</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
             
            </ul>
            </li>
          </ul>

<?php
}
?>
       </div>

      </div>
    </nav>

    <div class="wide">
      	<div class="col-xs-5 line"><hr></div>
        <div class="col-xs-2 logo"><img src="images/LogoImage.png"></div>
        <div class="col-xs-5 line"><hr></div>
        <div class="tagline">Best Restaurant in Europe</div>
    </div>
    

    <div class="orderblock">
    <h2>Feeling Hungry?</h2>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Order Now </a></center>
    </div>
    <br>
    <section class="freviews">

<div class="section white center">
  <h3 class="header">What Our Customers Say</h3>
  <div class="carousel myreviews" style="margin-bottom: 35px;">
      <a class="carousel-item" href="#one!">
        <div class="row">
          <div class="col s12">
            <div class="card-panel teal" style="background: #6e73ee !important;">
              <span class="white-text">"i think, i will eat at this restaurant every days"<br>-<br> <strong>Gnabry</strong>
              </span>
            </div>
          </div>
        </div>
      </a>
      <a class="carousel-item" href="#two!">
        <div class="row">
          <div class="col s12">
            <div class="card-panel teal" style="background: #6e73ee !important;">
              <span class="white-text">"hmm...delicious"<br>-<br> <strong>Kimmich</strong>
              </span>
            </div>
          </div>
        </div>
      </a>
      <a class="carousel-item" href="#three!">
        <div class="row">
          <div class="col s12">
            <div class="card-panel teal" style="background: #6e73ee !important;">
              <span class="white-text">"Wunderbarrrrr"<br>-<br> <strong>Lewandowski</strong>
              </span>
            </div>
          </div>
        </div>
      </a>
      <a class="carousel-item" href="#four!">
        <div class="row">
          <div class="col s12">
            <div class="card-panel teal" style="background: #6e73ee !important;">
              <span class="white-text">" best food in europe"<br>-<br> <strong>Manuel Neuer</strong>
              </span>
            </div>
          </div>
        </div>
      </a>
      <a class="carousel-item" href="#five!">
        <div class="row">
          <div class="col s12">
            <div class="card-panel teal" style="background: #6e73ee !important;">
              <span class="white-text">"recommend deh!"<br>-<br> <strong>Thomas Müller</strong>
              </span>
            </div>
          </div>
        </div>
      </a>
      <a class="carousel-item" href="#six!">
        <div class="row">
          <div class="col s12">
            <div class="card-panel teal" style="background: #6e73ee !important;">
              <span class="white-text">"das ist lecker, lahh!!!!"<br>-<br> <strong>Toni Kroos</strong>
              </span>
            </div>
          </div>
        </div>
      </a>
    </div>
</div>
    
<script
	  src="https://code.jquery.com/jquery-3.4.1.min.js"
	  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  crossorigin="anonymous"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="js/loaders.js"></script>
    <script src="js/ajax.js"></script>
</body>
<section class="ffooter">
		<footer class="page-footer">
    <div class="p-3 mb-2 bg-dark text-white">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Contact US</h5>
                <p class="grey-text text-lighten-4">Freidrichstraße, 25 Berlin, 09130</p>
                <p class="grey-text text-lighten-4">Phone : +49157373515425</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Social Media Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-4" href="#!">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Whatsapp</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2022 Copyright 
            <a class="grey-text text-lighten-4 right" href="#!">Made in Germany with <span><i class="tiny material-icons">favorite</i></span></a>
            </div>
          </div>
          
        </footer>
	</section>

</html>