<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/css_reset.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/register.css">
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
        <nav>
        <a href="index.php#home" title="home"> <img id="logo" src="images/logo.png" alt="Logo"></a>
        </nav>
<body>

        <section id="main">
        <div id ="flex-container">
         
             <div class="movie5">
                <img src="images/doctorsleep.jpg" alt="doctorsleep">
             </div>
        </div>
      <div id ="registerform">
        <form action="signup.php" method="post" >
             
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <br>
                <input type="text" placeholder="UserId" name="uid" id="uid" >
                <div id="uid_err"></div>
                <br><br>
              
                <input type="text" placeholder="Email Address" name="email" id="email" >
                <div id="email_err"></div>
                <br><br>
                
                <input type="password" placeholder="Password" name="psw" id="psw" >
                <div id="password_err"></div>
                <br><br>
         
                <input type="password" placeholder="Confirm Password" name="psw-repeat" id="psw-repeat" >
                <div id="password2_err"></div>
                <br><br>
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                <br>
                <input type="submit" id="registerbtn" class="registerbtn" value="Sign Up">

                <div id="submission_err"></div>
               
                <?php
                if (isset($_GET["error"]) && $_GET["error"] == "1")
                    {
                        echo '<p id="error">username or email  is in use, please use another one and try again</p>';
                    }
                    
                   
                
                
                ?>
     </div>

        </form>
         <script src="js/jquery.js"></script> 
        <script src="js/register.js"></script>
        </section>
    <?php include_once('footer.php');?>

</body>

</html>