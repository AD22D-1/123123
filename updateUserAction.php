<?php
    session_start();

    if (!isset($_SESSION["userid"]))
    {
        header("Location: login.php");
        exit(0);
    }

    require_once("dbInfo.php");

    $mysqli = new mysqli($hostname,$dbUser,$dbPassword,$db); 

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }
    
    $userid = $_SESSION["userid"];
    $email= $_POST["email"];
    
      // checking if email is repeated, if yes, don't insert 
     $sqlstat = "SELECT COUNT(*) FROM users WHERE email ='" . $email . "'";
    // echo  $sqlstat . "<br>";
     $result =$mysqli->query($sqlstat);
     $record =$result -> fetch_row();

      if ($record[0] == '1')
     {
      header("Location:updateUser.php?error=1028");
      
        //echo "Email is in used, please use another one";
        exit();
       
      }
 


    $sqlstatement = "update users set email='$email' where userid ='$userid'";
    //echo $sqlstatement . "<br>";

  
if ($result = $mysqli -> query($sqlstatement)) 
   {
    header("Location:login.php?success=111");
     echo "User Account updated successfully ";
     $_SESSION['userid'] =  $userid ;
   }
  
   else{
   
     echo "Update Failed";
    
   }

    
$mysqli->close();
?>