<!DOCTYPE html>
<?php
	session_start();
	if(!isset($_SESSION['ID'])){
		header("Location: Login.php");
	}
?>
<html>
<head>
<title>Web Project</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="footer-distributed-with-contact-form.css">



</head>

<style>

body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body style=" background-image: url('images/lit-back.jpg')"" class="imagess"  class="body-color">


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
<div class="containers content" style="max-width:1400px;margin-top:80px"> 
 <div class="row">
    <!-- Left Column -->
    <div class="col-sm-3">

    
      
       <div class="row" style="width:350px;margin-left: -15px;margin-top: 25px">
        <div class="col-sm-12">
          <div style="background-color:#E8E8E8 	 ;border-radius:4px!important; " class="boxes">
            <div class="containers write-box-padding">
             <div > <h4 > Are you having some trouble seeing this site?? No Worries have the solution
 </h4>
                      <button  id="butt" type="button" class="buttons"  ><i class="fa fa-pencil"></i> Color Blind Mode</button> 
</div>
             
            </div>
          </div>
        </div>
      </div>
      
    

   
   </div>

<div class="col-sm-7">
    
      <div class="row" style="width:755px;margin-left: 0px">
        <div class="col-sm-12">
          <div style="color:#000!important;background-color:#fff!important;border-radius:4px!important" class="boxes">
            <div class="containers write-box-padding">
           <h3>Literature Blogs</h3>
              <p class=" write-box-padding">Find Everything about literature here!!! </p>
           
            </div>
          </div>
        </div>
      </div>

      <?php 
       include_once("./database/connectDB.php");
     	$query2 = "SELECT * FROM blog where catagory= 'Literature'";
     	$result2= $db->query($query2);
     	if ($result2->num_rows > 0){
			while($row=$result2->fetch_assoc()){
		
		echo "<div id='p1' class='containers boxes container-style' ><br>";
		echo "<span style='opacity: 0.5;float:right'>".$row['catagory']."</span>";
		echo "<h4>". $row['name']."</h4>";
		echo "<span style='opacity: 0.5;float:right'>".$row['date']."</span>";
		echo "<span style='opacity: 0.8'>By ".$row['author']."</span><hr>";
		echo "<p>". $row['content']."</p>";
		echo "<span><img src=". "\"" .$row['image'] . "\""."style='width:250px; height:200px;'' alt='Northern Lights>";
		echo "<img src='images/nature.jpg' style='width:250px; height :200px; margin-left: 10px' class='he'></span>";
		echo "<br><br></div>";

		}
  	}





      ?>
    <!-- End Middle Column -->
    </div>

</div>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h4 > <b>Title </b></h4>
     <textarea style="overflow:hidden" rows="1.5" cols="120">
</textarea>
 <h4> <b>Author: </b></h4>
     <textarea style="overflow:hidden" rows="1.5" cols="120">
</textarea>
 <h4> <b>Date: </b></h4>
     <textarea style="overflow:hidden" rows="1.5" cols="120">
</textarea>
 <h4> <b>Text</b></h4>
     <textarea style="overflow:hidden" rows="9" cols="120">
</textarea>
 <h4> <b>Category </b></h4>
     <textarea style="overflow:hidden" rows="1.5" cols="120">
</textarea>  <div style="text-align: center"><button type="button" class="buttons" ><i class="fa  fa-paper-plane"></i> Submit </button> 
      </div>  </div>

</div>
</div>


 <script type="text/javascript">
        // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("mybtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


      </script>
  
 
 <script type="text/javascript">
   var counter=0;
      $('#butt').on({ 
    'click': function(){
      if(counter==0){
$( "html" ).addClass( "colorblind" );
counter=1;
}
else if(counter==1)
{
  $( "html" ).removeClass( "colorblind" );
counter=0;
}
}});


   </script>
   <script  src="Control.js"></script>

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
   

</body>
</html>
