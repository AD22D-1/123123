<?php
    session_start();
    if (!isset($_SESSION["userid"])) // check whether user log in 
    {
        header("Location: login.php");
        exit();
    }
    else {
        $userid =$_SESSION["userid"];
    }
    
    if(!isset($_POST["contentid"])) // check whether user send in a form 
    {
        header("Location: movie.php");
        echo "please select a item from the movie";
        exit();
    }    
    else
    {
        $contentid =$_POST["contentid"];
    }
    
    require_once("dbInfo.php");

    $mysqli = new mysqli($hostname,$dbUser,$dbPassword,$db); 

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }
    
    // check if the user already added the items in favourite list 
    
    $sqlstat= "select count(*) from favouritelist where userid ='$userid' AND contentid =$contentid";
    //echo $sqlstat;
    $count=1;

    
    
    if($result = $mysqli -> query( $sqlstat))
    {
        $record =$result -> fetch_row();
        $count = $record[0];
        
    }
        
    else 
    {
        echo "Database Error";
     }
        
        if($count == 1 ){
            $sqlstatement ="delete from favouritelist where contentid= '$contentid'";
            echo $sqlstatement;
            if ($mysqli ->query($sqlstatement))
            {
            echo "item deleted from favourite list";
            header("Location:favourite.php?success1");
            }
            else{
                echo "Database Error";
            }
        }
       
       

?>