<?php

require_once("dbInfo.php"); // import the file
$mysqli = new mysqli($hostname, $dbUser,  $dbPassword, $db); //use the four object to connect to sql
if ($mysqli -> connect_errno)
{
    echo "error msg: " . $mysqli -> connect_error;
    exit();
}
// no error do whatever here..

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    <link rel="stylesheet" href="css/css_reset.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/search.css">
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
    <?php
    include_once('header.php'); 
    if (!isset($_SESSION['userid']))
    {
        header("Location: login.php");
        exit();
    }
    ?>

        <section id="main">
        <!-- <i style="font-size:24px" class="fa">&#xf191;</i> -->
        <h1>Search Result </h1>
        <div id ="grid-container">
        <?php
        // $sqlcategory="select catname from category";
        // $resultcat = $mysqli -> query($sqlcategory);
        // while ($recordcat = $resultcat -> fetch_row()){
        
        // $cat = $recordcat[0];
        // echo"<h1>$cat</h1>";
        // $sqlstr="select * from masterlist where category ='$cat'";
        $keyword=$_POST["keyword"];
        $sqlstr="select * from masterlist where title like '%$keyword%' OR category like '%$keyword%'";
        //echo $sqlstr;
        $result = $mysqli -> query ($sqlstr);
        while ($record = $result -> fetch_row()){
            ?>
        
    
                    <article>
                        
                        
                        <?php echo $record[2];?>
                        <p> <?php echo $record[1]; ?></p>
                        <form action="addToFav.php" method="post">
                            <input type="hidden"value="<?php echo $record[0];?>" name="contentid">
                            <input type="submit" value="&#x1F496;">
                            
                        </form>
                    </article>
                    
                    
                    
                    <?php
                }
            // }// close while
                ?>
                   </div>
                   <br><br>
                   
        </section>
    <?php include_once('footer.php');?>
    <script src="js/jquery.js"></script>
    <script src="js/movie.js"></script>
</body>
</html>