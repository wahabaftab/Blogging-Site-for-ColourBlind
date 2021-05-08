<!DOCTYPE html>
<?php
	session_start();
	if(!isset($_SESSION['ID'])){
		header("Location: Login.php");
	}
?>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>

<body class="body-color">
<!-- Navbar -->
<div class="top left">
 <ul class="navbar-color" >
  
  <li><a href="index.php" ><i class="fa fa-home margin-right"></i><span style="font-size:15px;font-weight: bold">Blog</span></a></li>
  <li><a href="#" class="navbar-hover-white" title="News"><i class="fa fa-globe"></i><span style="font-size:15px;font-weight: bold">Categories</span></a></li>
  <li class="hide-small"><a href="#" class=" navbar-hover-white" title="Account Settings"><i class="fa fa-phone"></i><span style="font-size:15px;font-weight: bold">Contact</span></a></li>
  <li class="hide-small"><a href="Logout.php" class=" navbar-hover-white" title="Messages"><i class="fa fa-sign-out"></i><span style="font-size:15px;font-weight: bold">Logout</span></a></li>
  
 <li class="hide-small profile"><a href="profile.php" class=" navbar-hover-white" title="My Account"><img src=<?php echo "\"".$_SESSION['image']."\""; ?> class="w3-circle" style="height:25px;width:25px" alt="Avatar"><?php echo "    ".$_SESSION['fullName']; ?></a></li>
  
 </ul>
 
</div>

<br>
<div class="containers content" style="max-width:1400px;margin-top:80px"> 
 <div class="row">
    <!-- Left Column -->
    <div class="col-sm-3">


    <hr style=" border: 1px solid #ccc;"> <div > <h4 > Are you having some trouble seeing this site?? No Worries we care for you
 </h4>
                      <button type="button" class="buttons" ><i class="fa fa-pencil"></i> Color Blind Mode</button> 
</div>
   <hr style=" border: 1px solid #ccc;"> 
   </div>


<div class="col-sm-7">
    
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
      </div>
</div>
     </div>
     </div>
     </body>
     </html>