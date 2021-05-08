<!DOCTYPE html>
<html>

<?php
	session_start();
	if(!isset($_SESSION['ID'])){
		header("Location: Login.php");
	}
?>

<title>Web Projectaga</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, contact, form, icons" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="footer-distributed-with-contact-form.css">

  <script  src="Control.js"></script>


<style>


body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="body-color">
<!-- Navbar -->
<div class="top left">
 <ul class="navbar-color" >
  
  <li><a href="index.php" class="navbar-hover-white"><i class="fa fa-home margin-right"></i><span style="font-size:15px;font-weight: bold">Blog</span></a></li>
  <li><a href="Category.php" class="navbar-hover-white" title="News"><i class="fa fa-globe"></i><span style="font-size:15px;font-weight: bold">Categories</span></a></li>
  <li class="hide-small"><a href="Logout.php" class=" navbar-hover-white" title="Messages"><i class="fa fa-sign-out"></i><span style="font-size:15px;font-weight: bold">Logout</span></a></li>
  
  <li class="hide-small profile"><a href="profile.php" class=" navbar-hover-white" title="My Account"><img src=<?php echo "\"".$_SESSION['image']."\""; ?> class="w3-circle" style="height:25px;width:25px" alt="Avatar"><?php echo "    ".$_SESSION['fullName']; ?></a></li>
  
 </ul>
 
</div>
<br>
<br>
<br>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 7</div>
  <img  id="g"src="images/sports.jpg" style="width:1345px; height:400px;">
</div>

<div class="mySlides fade">
  <div class="numbertext">2/ 7</div>
  <img  id="f" src="images/medical.jpg" style="width:1345px; height:400px;">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 7</div>
  <img   id="e"src="images/fashion.jpg" style="width:1345px; height:400px;">
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 7</div>
  <img  id="a" src="images/nature.jpg" style="width:1345px; height:400px;">
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 7</div>
  <img id="d" src="images/buissness.jpg" style="width:1345px; height:400px;">
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 7</div>
  <img id="c"  src="images/entertainment.jpg" style="width:1345px; height:400px;">
</div>
<div class="mySlides fade">
  <div class="numbertext">7 / 7</div>
  <img  id="b"  src="images/literature.jpg" style="width:1345px; height:400px;">
</div>

<a class="prev" onclick="plusSlides(-1)"><</a>
<a class="next" onclick="plusSlides(1)">></a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
 <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
  <span class="dot" onclick="currentSlide(7)"></span> 

</div>
  <script  src="Control.js"></script>


<div class="agileits-gal">
		<div style="float:left;" class="container">
			<div style="float:left" class="row">
			    <div  class="col-sm-3"">
			   <div style="background-color:#E8E8E8 	 ;border-radius:4px!important; " class="boxes">
            <div class="containers write-box-padding">

			    <hr style=" border: 1px solid #ccc;margin-top: 50px"> <div > <h4 id="p2"> Are you having some trouble seeing this site?? No Worries we care for you
 </h4>
                      <button id="change" type="button" class="buttons" ><i class="fa fa-pencil"></i> Color Blind Mode</button> 
</div>
   <hr style=" border: 1px solid #ccc;">
</div>
</div>
</div>

    <div class="col-sm-9" >
      <div style="background-color:#E8E8E8 	 ;border-radius:4px!important; " class="boxes">
            <div class="containers write-box-padding">

			<h2 class="w3ls_head">Categories</h2>
			</div>
			</div>
			<div class="agileinfo_gallery_grids">
				<ul class="clearfix demo">
					<li>
						<div class="agileinfo_gallery_grid">
						 <a href="sports.php"> <figure class="imghvr-fold-up"> <img id="1" src="images/sports.jpg" alt=" " class="img-responsive boxing">
							<figcaption>
							  <h4>Sports</h4>
							</figcaption>
						  </figure></a>
						</div>
					</li>
					<li>
						<div class="agileinfo_gallery_grid">
						  <a href="fashion.php"><figure class="imghvr-fold-up"><img id="2" src="images/fashion.jpg" alt=" " class="img-responsive boxing">
							<figcaption>
								<h4>Fashion</h4>

							</figcaption>
						  </figure></a>
						</div>
					</li>
					<li>
						<div class="agileinfo_gallery_grid">
						  <a href="literature.php"><figure class="imghvr-fold-up"><img id="3" src="images/literature.jpg" alt=" " class="img-responsive boxing">
							<figcaption>
							 <h4>Literature</h4>
							</figcaption>
						  </figure></a>
						</div>
					</li>
					<li>
						<div class="agileinfo_gallery_grid">
						  <a href="nature.php"><figure class="imghvr-fold-up"><img id="4" src="images/nature.jpg" alt=" " class="img-responsive boxing">
							<figcaption>
							  <h4>Nature</h4>
							</figcaption>
						  </figure></a>
						</div>
					</li>
					<li>
						<div class="agileinfo_gallery_grid">
						 <a href="medical.php"> <figure class="imghvr-fold-up"><img id="5" src="images/medical.jpg" alt=" " class="img-responsive boxing">
							<figcaption>
							  <h4>Medical</h4>
							</figcaption>
						  </figure></a>
						</div>
					</li>
					<li>
						<div class="agileinfo_gallery_grid">
						  <a href="entertainment.php"><figure class="imghvr-fold-up"><img id="6" src="images/entertainment.jpg" alt=" " class="img-responsive boxing">
							<figcaption>
							  <h4 align="center">Entertainment</h4>
							</figcaption>
						  </figure></a>
						</div>
					</li>
					<li>
						<div class="agileinfo_gallery_grid">
						  <a href="buissness.php"><figure class="imghvr-fold-up"><img id="7" src="images/buissness.jpg" alt=" " class="img-responsive boxing">
							<figcaption>
							  <h4>Buissness</h4>
							</figcaption>
						  </figure></a>
						</div>
					</li>
					
				</ul>
				</div>
				</div>
				
</div>
</div>
</div>
<br>
<footer style="background-color: #4d636f" class="footer-distributed">
			<h2  style="margin-top: 0px"> Contact Us: </h2>

			<div class="footer-left">



				

				<div>
					<p><span><i class="fa fa-map-marker">&nbsp &nbsp</i>21 Revolution Street</span> Paris, France</p>
				</div>

				<div>
					<p><span><i class="fa fa-phone">&nbsp &nbsp</i> </span>+1 555 123456</p> 
				</div>

				<div>
					 <p><span><i class="fa fa-envelope"> &nbsp &nbsp</i><a href="mailto:support@company.com"></span>support@company.com</a></p>
				</div>

			

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

			<div class="footer-right">

				<form >

					<input type="text" name="email" placeholder="Email" />
					<textarea  placeholder="Message"></textarea>
					<button type="button" >Send</button>

				</form>

			</div>

		</footer>
  <script >
      $('#change').click(
    function(){
$( "img" ).addClass( "imgs" );</script>



				</body></html>
