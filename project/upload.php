<!DOCTYPE html>
<?php
		$message="";
		session_start();

		function trimandslim($input){
                  $input=trim($input);
                  $input=stripslashes($input);
                  $input=htmlspecialchars($input);
                  return $input;
            }

		if(isset($_POST['Upload'])){

			$category= trimandslim($_POST['Category']);
			$title= trimandslim($_POST['title']);
			$author= $_SESSION['fullName'];
			$blog= trimandslim($_POST['blog']);
			$dated=date('l, F, Y');
			$userid=$_SESSION['ID'];

			switch($category){
				case "Nature":
					$image="./images/nature.jpg";
					break;
				case "Business":
					$image="./images/buissness.jpg";
					break;
				case "Entertainment":
					$image="./images/entertainment.jpg";
					break;
				case "Literature":
					$image="./images/literature.jpg";
					break;
				case "Medical":
					$image="./images/medical.jpg";
					break;
				case "Sports":
					$image="./images/sports.jpg";
					break;
				default:
					$image='./images/entertainment.jpg';
			}

			

			

			include_once("./database/connectDB.php");

			if( (strlen($category)>0) and (strlen($title)>0) and (strlen($blog)>0) and  (strlen($author)>0)  ){

				 
				 $query = "INSERT INTO `blog`(`ID`, `name`, `created_ID`, `content`, `catagory`, `author`, `date`, `image`) VALUES (NULL, '$title', '$userid', '$blog','$category','$author','$dated','$image')";


                 
                  $result = $db->query($query);
                  if($result==TRUE){
                     $message='Succesful!';
                  }else{
                    $message= "Wrong Query!" . $db->error; 
                  }

			}else{
				$message='Failed: Information not entered correctly!';
			}

		}else{
			$message='Failed: Information not entered correctly!';
		}

	
?>
<html>
<head>
	<title>Uploading your blog</title>
	<link rel="stylesheet" href="LoginStyle.css">
</head>

<body>
<meta http-equiv="refresh" content="3;url=index.php">
<div class=login-page>
<div class=form>
<h1><font size=4 color=black><i>Uploading your blog...</i></font></h1>
<h1><font size=4 color=red><i>
<?php 
	echo "<hr>$message<hr>";
?>
	</i></font></h1>
</div>
</div>
</body>
</html>