<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="LoginStyle.css">
  </head>
  
  <body>  
      <div class="login-page">
      <div class="form">

          <?php
            session_start();
           
              if(isset($_POST['login'])) {
                if($_POST['login']){
                  include_once("./database/connectDB.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $username=trim($username);
                  $username=stripslashes($username);
                  $username=htmlspecialchars($username);

                  $password=trim($password);
                  $password=stripslashes($password);
                  $password=htmlspecialchars($password);

                  
                  if( (strlen($username)>0) and (strlen($password)>0)){
                    
           
                  $query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
                  $result = $db->query($query);
                  $row = mysqli_fetch_array($result);
                  $ID = $row['ID'];
                  $db_password = $row['password'];
           
                  if($password == $db_password) {
                      $_SESSION['username'] = $username;
                      $_SESSION['ID'] = $ID;
                      header("Location: index.php");
                  } else {
                      echo "<h1><font size=4 face=verdana color='red'>Username/Password incorrect!</font></h1>";
                      
                  }
                }else{
                  echo "<h1><font size=4 face=verdana color='red'>Please Fill the Required Fields!</font></h1>";
                }
              }
            }
         ?>
        <form class="login-form" action="Login.php" method="post">
          <h1><font face=verdana> Sign-In!</font></h1>
          <input type="text" name= "username" placeholder="Enter Your Username"/>
          <input type="password" name= "password" placeholder="Enter Your Password"/>
          <input ID="button" name="login" type="submit" value="Login">
          <p class="message">Not registered? <a href="Register.php">Create an account</a></p>
        </form>
      </div>
    </div>
  </body>



</html>