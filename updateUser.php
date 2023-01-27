<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="css/css_reset.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/update.css">
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


<?php
 session_start();


    if (!isset($_SESSION['userid']))
    {
        header("Location: login.php");
        exit();
    }
    
    require_once("dbInfo.php");

    $mysqli = new mysqli($hostname,$dbUser,$dbPassword,$db); 

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }
    
    $sqlstatement = "Select * from users where userid='" . $_SESSION['userid'] ."'";
    
    if($result = $mysqli -> query($sqlstatement))
    {
        $record = $result -> fetch_row();
     ?>
     <body>
   <section id="main">
  
   <div id ="flex-container">
         
            <div class="movie6">
             <img src="images/Angry_Birds_Movie.jpg" alt="angrybird">
             </div> 
    </div>
    <div id ="update">
    <h1>Please Update your Account Here </h1>
        <form action="updateUserAction.php" method="post">
        <input type="text" name ="userid" id="userid"  placeholder="Enter your UserID" value ="<?php echo $record[0]?> " disabled>
        <br><br>
        
        <input type="text" name ="email" id="email" placeholder="Enter your email" value ="<?php echo $record[1]?> ">
        <br><br>
    
        
        <input type="submit" value="Update">
        </form> 
        <?php
    if (isset($_GET["error"]) && $_GET["error"] == "1028")
                    {
                        echo '<p id="error">Email is in used, please use another one</p>';
                }
                ?>  
    </div>

    
   </section>
   <?php include_once('footer.php');?>
     </body>
       

  
        
        
        
<?php
    }
    
?>