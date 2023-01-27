<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/css_reset.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
  
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cantarell&family=Kanit:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
  <nav>
  <a href="index.php#home" title="home"> <img id="logo" src="images/logo.png" alt="Logo"></a>
  </nav>
   
        <section id="main">
          <div id ="flex-container">
         
             <div class="movie1" >
             <img src="images/baymax.jpg" alt="baxman">
             </div>
      
             <!-- <div class="movie2" >
             <img src="images/Incantation.jpg" alt="Incantation">
             </div>
      
             <div class="movie3">
             <img src="images/spiderman.jpg" alt="spiderman">
             </div>
             
                   
             <div class="movie4" >
             <img src="images/mermaid.jpg" alt="Mermaid">
             </div>
             
                   
             <div class="movie5">
             <img src="images/doctorsleep.jpg" alt="doctorsleep">
             </div>
             
             <div class="movie6">
             <img src="images/Angry_Birds_Movie.jpg" alt="angrybird">
             </div> -->
  
          </div>
        <div id="login">
<h1>Please Login</h1>
        <div class="container">
<form action="login_process.php" class ="form" method="post">
    <div class="row">
      <div class="col-25">
        <label for="uname">UserID:</label>
      </div>
      <div class="col-75">
      <input type="text" placeholder="User ID " name="userid" id="userid" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="pwd">Password: </label>
      </div>
      <div class="col-75">
      <input type="password" placeholder="Password" name="psw" id="psw" >
      </div>
    </div>
    
    <div class="row">
      <input type="submit" value="Sign In">
    </div>
    <?php
                    if (isset($_GET["error"]) && $_GET["error"] == "11208")
                    {
                        echo '<p class="msg">Invalid Login. Try again.</p>';
                    }
                    if (isset($_GET["register"]) && $_GET["register"] == "1")
                    {
                        echo '<p class="msg">User Account created successfully.Please Login in</p>';
                        
                    }
                    
                    if (isset($_GET["success"]) && $_GET["success"] == "111")
                    {
                        echo '<p class="msg">User Account updated successfully.Please Login in</p>';
                        
                    }
                ?>
    <div class="row">
    <p id="acct">Don't have an account yet !<br>
    <a id="bold" href="register.php">Sign Up</a></p>
    </div>
  </form>
</div>
</div>
        
        </section>
    <?php include_once('footer.php');?>
</body>
</html>