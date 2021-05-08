<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="LoginStyle.css">
    <style>
      label > input{ /* HIDE RADIO */
        visibility: hidden; /* Makes input not-clickable */
        position: absolute; /* Remove input from document flow */
      }
      label > input + img{ /* IMAGE STYLES */
        cursor:pointer;
        border:2px solid transparent;
      }
      label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
      border:2px solid #f00;
      }
      label {
          text-align: center;
      }
      label > img{
        width: 70px; 
        height: auto; 
      }
      </style>
  </head>
  
  <body>  
      <div class="login-page">
      <div class="form">

          <?php
            session_start();
            function trimandslim($input){
                  $input=trim($input);
                  $input=stripslashes($input);
                  $input=htmlspecialchars($input);
                  return $input;
            }
           
              if(isset($_POST['register'])) {
                if($_POST['register']){
                  include_once("./database/connectDB.php");
                  
                  $username=$_POST['Username'];
                  $username=trimandslim($username);

                  $password=$_POST['Password'];
                  $password=trimandslim($password);

                  $fullname=$_POST['FullName'];
                  $fullname=trimandslim($fullname);

                  $email=$_POST['Email'];
                  $src=$_POST['image'];
                  
                 
               

                if( (strlen($username)>0) and (strlen($password)>0) and (strlen($fullname)>0) and  (strlen($src)>0)  ){

                  
           
                  $query = "INSERT INTO `users`(`ID`, `fullName`, `username`, `password`, `picture`) VALUES (NULL,'$fullname','$username','$password','$src')";

                 
                  $result = $db->query($query);
                  if($result==TRUE){
                     header("Location: Registered.php");
                  }else{
                    echo "Wrong Query!" . $result->error; 
                  }
                  
           
                }else{
                  echo "<h1><font size=4 face=verdana color='red'>Please Fill the Required Fields!</font></h1>";
                }
              }
            }
         ?>
        <form class="login-form" action="Register.php" method="post">
          <h1><font face=verdana> Register!</font></h1><p class=message color=red>* All Details are Reqiired</p><br>
          <input type="text" name= "Username" placeholder="Enter Your New Username *"/>
          <input type="password" name= "Password" placeholder="Enter Your Password *"/>
          <input type="text" name= "FullName" placeholder="Enter Your Full Name *"/>
          <input type="text" name= "Email" placeholder="Enter Your Email *"/>
          <h3><font size=3 face=verdana> Choose an image!</font></h1><hr>
            <label>
              <input type="radio" name="image" value="./images/userimages/trooper.jpg" checked="checked" />
              1. <img src="./images/userimages/trooper.jpg"><br>
            </label>
            <label>
              <input type="radio" name="image" value="./images/userimages/ninja.jpg" />
              2. <img src="./images/userimages/ninja.jpg"><br>
            </label>
            <label>
              <input type="radio" name="image" value="./images/userimages/king.jpg" />
              3. <img src="./images/userimages/king.jpg"><br>
            </label>
            <label>
              <input type="radio" name="image" value="./images/userimages/cowboy.jpg" />
              4. <img src="./images/userimages/cowboy.jpg"><br>
            </label>
            <hr>
            <input ID="button" name="register" type="submit" value="Register">
          <p class="message">Already Registered? <a href="Login.php">Sign in Here</a></p>
        </form>
      </div>
    </div>
  </body>



</html>