<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Oxygym+</title>
  <script type="text/javascript" src="controlabonn.js"></script>
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="plugins/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="plugins/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="plugins/owl/owl.carousel.css">
	<link rel="stylesheet" href="plugins/owl/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="plugins/flex-slider/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="plugins/cd-hero/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="plugins/html5shiv.js"></script>
      <script src="plugins/respond.min.js"></script>
    <![endif]-->

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">

</head>

<body>

	<!-- Style switcher start -->
	<div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-sliders"></i>
		</div>
		<h3>Style Options</h3>
		<button id="preset1" class="btn btn-sm btn-primary"></button>
		<button id="preset2" class="btn btn-sm btn-primary"></button>
		<button id="preset3" class="btn btn-sm btn-primary"></button>
		<button id="preset4" class="btn btn-sm btn-primary"></button>
		<button id="preset5" class="btn btn-sm btn-primary"></button>
		<button id="preset6" class="btn btn-sm btn-primary"></button>
		<br/><br/>
		<a class="btn btn-sm btn-primary close-styler float-right">Close X</a>
	</div>
	<!-- Style switcher end -->

	<div class="body-inner">

<!-- Header start -->

<!--/ Header end -->
<header id="header" class="fixed-top header" role="banner">
	<a class="navbar-brand navbar-bg" href="index.php"><img class="img-fluid float-right" src="images/logo.png" alt="logo"></a>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<button class="navbar-toggler ml-auto border-0 rounded-0 text-white" type="button" data-toggle="collapse"
				data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>

			<div class="collapse navbar-collapse text-center" id="navigation">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Acceuil</a></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="portfolio.php">Nos Produits</a></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="abonnement.php">Abonnement</a></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="coachs.php">Nos Coachs</a></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="cours.php">Nos Cours</a></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="salles.php">Nos Salles</a></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">A propos</a></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contactez nous</a></a>
					</li>
					<li class="nav-item">
					<?php if(isset ($_SESSION["id"])) { ?>
Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}else {

	?>
	<a class="nav-link" href="login.php">LOGIN</a></a>
	<?php
}
?>
</li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<div id="banner-area">
	<img src="images/banner/banner1.jpg" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>ABONNEMENT</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="#">Acceuil</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">Abonnement</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<form name="f" method="POST" action="ajouterabonn.php" >
<section id="main-container">
	<div class="container">
	

		<div class="row">
			<div class="col-md-7">
				<h1>ABONNEMENT</h1>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Identifiant</label>
								<input class="form-control" name="ida" id="ida" placeholder="Votre Identifiant" type="text">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Nom</label>
								<input class="form-control" name="nom" id="nom" placeholder="Votre Nom" type="text">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Prenom</label>
								<input class="form-control" name="prenom" id="prenom" placeholder="Votre Prenom" type="text">
							</div>
						</div>
					</div>
					<div class="row">

						<div class="col-md-6">
							<div class="form-group">
								<label>Age</label>
								<input class="form-control" name="age" id="age" placeholder="Votre Age" type="number">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Date Du Debut</label>
								<input class="form-control" name="dateD" id="dateD" placeholder="La date du debut" type="date">
							</div>
						</div>
						
					</div>
					<div class="form-group">
						<label>Date De La Fin</label>
						<input class="form-control" name="dateF" id="dateF" placeholder="La date de la fin" type="date"></textarea>
					</div>
					<!--<div class="form-group">
						<label>Mot De Passe</label>
						<input class="form-control" name="mdp" id="mdp" placeholder="Votre Mot de passe" rows="10" type="password" required></textarea>
					</div>-->
					<div class="text-right"><br>
						<button class="btn btn-primary solid blank" type="submit" onclick="test()">Confirmer</button>
					</div>
				</form>
			</div>
			<div class="col-md-1"></div>
			<!--<div class="col-md-4">
				<h1>Login</h1>
				<div class="form-group">
						<label>E-mail</label>
						<input class="form-control" name="email" id="email" placeholder="Votre Email" rows="10" type="texts" required></textarea>
					</div>
					<div class="form-group">
						<label>Mot De Passe</label>
						<input class="form-control" name="mdp" id="mdp" placeholder="Votre Mot de passe" rows="10" type="password" required></textarea>
					</div>
					<div class="text-right"><br>
						<button class="btn btn-primary solid blank" type="submit">Login</button>
					</div>
			</div>-->
		</div>
	</div>
	<!--/ container end -->
 </section>
</form>
<!--/ Main container end -->

	<!-- Footer start -->
	<!--<footer id="footer" class="footer">-->
	 <!-- <div class="container">
	    <div class="row">
	      <div class="col-md-4 col-sm-12 footer-widget">
	        <h3 class="widget-title">Recent Posts</h3>
	        <div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="#">Bulgaria claims to find Europe's 'oldest town'</a></h4>
	            <p class="post-meta">
	              <span class="author">Posted by John Doe</span>
	              <span class="post-meta-cat">in<a href="#"> Blog</a></span>
	            </p>
	          </div>
	        </div>--><!-- 1st Latest Post end -->

	        <!--<div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="#">Few Answers in Case of Murdered Law Professor</a></h4>
	            <p class="post-meta">
	              <span class="date"><i class="icon icon-calendar"></i> Mar 15, 2015</span>
	              <span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a href="#">03</a></span>
	            </p>
	          </div>
	        </div>--><!-- 2nd Latest Post end -->

	        <!--<div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="#">Over the year we have lots of experience in our field</a></h4>
	            <p class="post-meta">
	              <span class="date"><i class="icon icon-calendar"></i> Apr 17, 2015</span>
	              <span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a href="#">14</a></span>
	            </p>
	          </div>
	        </div>--><!-- 3rd Latest Post end -->

	      <!--</div>-->
	      <!--/ End Recent Posts-->


	      <!--<div class="col-md-4 col-sm-12 footer-widget">
	        <h3 class="widget-title">Flickr Photos</h3>

	        <div class="img-gallery">
	          <div class="img-container">
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/1.jpg">
	              <img src="images/gallery/1.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/2.jpg">
	              <img src="images/gallery/2.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/3.jpg">
	              <img src="images/gallery/3.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/4.jpg">
	              <img src="images/gallery/4.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/5.jpg">
	              <img src="images/gallery/5.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
	              <img src="images/gallery/6.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
	              <img src="images/gallery/7.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
	              <img src="images/gallery/8.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
	              <img src="images/gallery/9.jpg" alt="">
	            </a>
	          </div>
	        </div>
	      </div>-->
	      <!--/ end flickr -->

	      <!--<div class="col-md-3 col-sm-12 footer-widget footer-about-us">
	        <h3 class="widget-title">About Craft</h3>
	        <p>We are a awward winning multinational company. We believe in quality and standard worldwide.</p>
	        <h4>Address</h4>
	        <p>1102 Saint Marys, Junction City, KS</p>
	        <div class="row">
	          <div class="col-md-6">
	            <h4>Email:</h4>
	            <p>info@craftbd.com</p>
	          </div>
	          <div class="col-md-6">
	            <h4>Phone No.</h4>
	            <p>+(785) 238-4131</p>
	          </div>
	        </div>
	        <form action="#" role="form">
	          <div class="input-group subscribe">
	            <input type="email" class="form-control" placeholder="Email Address" required="">
	            <span class="input-group-addon">
	              <button class="btn" type="submit"><i class="fa fa-envelope-o"> </i></button>
	            </span>
	          </div>
	      </div>-->
	      <!--/ end about us -->

	    <!--</div>--><!-- Row end -->
	  <!--</div>--><!-- Container end -->
	<!--</footer>--><!-- Footer end -->


	<!-- Copyright start -->
	<section id="copyright" class="copyright angle">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12 text-center">
	        <ul class="footer-social unstyled">
	          <li>
	            <a title="Twitter" href="https://twitter.com/?lang=fr">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
	            </a>
	            <a title="Facebook" href="https://www.facebook.com/Oxygymplus.tn/?epa=SEARCH_BOX">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
	            </a>
	            <a title="Google+" href="https://www.google.fr/">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
	            </a>
	           <!-- <a title="linkedin" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
	            </a>
	            <a title="Pinterest" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>
	            </a>
	            <a title="Skype" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
	            </a>
	            <a title="Dribble" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-dribbble"></i></span>
	            </a>-->
	          </li>
	        </ul>
	      </div>
	    </div>
	    <!--/ Row end -->
	    <!--<div class="row">
	      <div class="col-md-12 text-center">
	        <div class="copyright-info">
	          &copy; Copyright 2019 Themefisher. <span>Designed by <a
	              href="https://themefisher.com">Themefisher.com</a></span>
	        </div>
	      </div>
	    </div>-->
	    <!--/ Row end -->
	    <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix position-fixed">
	      <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
	    </div>
	  </div>
	  <!--/ Container end -->
	</section>
	<!--/ Copyright end -->

</div><!-- Body inner end -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- Style Switcher -->
<script type="text/javascript" src="plugins/style-switcher.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="plugins/owl/owl.carousel.js"></script>
<!-- PrettyPhoto -->
<script type="text/javascript" src="plugins/jquery.prettyPhoto.js"></script>
<!-- Bxslider -->
<script type="text/javascript" src="plugins/flex-slider/jquery.flexslider.js"></script>
<!-- CD Hero slider -->
<script type="text/javascript" src="plugins/cd-hero/cd-hero.js"></script>
<!-- Isotope -->
<script type="text/javascript" src="plugins/isotope.js"></script>
<script type="text/javascript" src="plugins/ini.isotope.js"></script>
<!-- Wow Animation -->
<script type="text/javascript" src="plugins/wow.min.js"></script>
<!-- Eeasing -->
<script type="text/javascript" src="plugins/jquery.easing.1.3.js"></script>
<!-- Counter -->
<script type="text/javascript" src="plugins/jquery.counterup.min.js"></script>
<!-- Waypoints -->
<script type="text/javascript" src="plugins/waypoints.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>


<!-- Main Script -->
<script src="js/script.js"></script>

</body>

</html>