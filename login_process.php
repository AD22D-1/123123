<?php
    if (!isset($_POST["userid"]) )
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

    $sqlstatement = "SELECT COUNT(*) FROM users WHERE userid ='" . $_POST["userid"] . "' AND password = '" . $_POST["psw"] . "'";
    echo $sqlstatement . "<br>";

    
    if ($result = $mysqli -> query($sqlstatement)) 
    {
        $record = $result -> fetch_row();
        $result->free_result();
    }
    




    if ($record[0] == '1')
    {
    

        session_start();

        $sqlstatement = "SELECT userid FROM users WHERE userid ='" . $_POST["userid"] . "' AND password = '" . $_POST["psw"] . "'";
   
        
        if ($result = $mysqli -> query($sqlstatement)) 
        {
            $record = $result -> fetch_row();
            $result->free_result();

            // $_SESSION["userid"] = $record[0];
            $_SESSION["userid"] = $_POST["userid"];

            $mysqli->close();

            header("Location: favourite.php");
        }
    }
    else
    {
       
        header("Location: login.php?error=11208");
    }
    
?>
