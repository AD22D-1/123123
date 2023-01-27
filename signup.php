<?php
    session_start();

    if (!isset($_POST["uid"]))
    {
       header("Location:login.php");
        exit(0);
    }

    require_once("dbInfo.php");

    $mysqli = new mysqli($hostname,$dbUser,$dbPassword,$db); 

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }
    $username = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["psw"];
    

        // checking if userid is repeated, if yes, don't insert 
        $sqlselect = "select count(*) from users where userid='". $username . "' OR email='" . $email."'";
        //echo $sqlselect;
        $result =$mysqli->query($sqlselect);
        $record =$result -> fetch_row();
        if ($record[0] == 1)
        {
          
           //echo "The username or email  is in use, please use another one and try again.";
           header("Location: register.php?error=1");
            exit();
        }
        
        
    $sqlstatement = "insert into users (userid,email,password) values('$username','$email','$pwd')";
   // echo $sqlstatement . "<br>";

    
    if ($result = $mysqli -> query($sqlstatement)) 
    {
      //header("Location:login.php?sussessful=1");
      header("location:login.php?register=1");
       //echo "User Account created successfully ";
       $_SESSION['username'] =  $username ; // asign this user to the session username
       
       
       
    }
    
    else{
       // echo "Username is in used, please choose another username";
    echo "Database error";
    }
$mysqli->close();
?>

