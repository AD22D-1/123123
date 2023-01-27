<?php
include_once('header.php'); 
//session_start();
if (!isset($_SESSION['userid']))
 {
    header("Location: login.php");
    exit();
 }
 else {
   $userid =$_SESSION["userid"];
}

require_once("dbInfo.php");

$mysqli = new mysqli($hostname,$dbUser,$dbPassword,$db); 

// Check connection
if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}

$sqlstatement ="select * from favouritelist join masterlist on favouritelist.contentid = masterlist.contentid where userid ='$userid' and listname='main' ";
//echo $sqlstatement;


if($result = $mysqli -> query( $sqlstatement))
{


}

else {
echo "Database Error";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FavList</title>
<link rel="stylesheet" href="css/css_reset.css">
<link rel="stylesheet" href="css/global.css">
<link rel="stylesheet" href="css/favourite.css">
</head>

<body>

<h1>Favourite list for <?php echo $userid;?></h1>
<section id="main">
<?php
while($record = $result -> fetch_row())
    {
    ?>

  <article class="item1">
  <?php echo $record[6];?>
  <?php echo"<p> $record[5]</p>";?>
     <form action="deletefromfav.php" method="post">
           <input type="hidden"value="<?php echo $record[1];?>" name="contentid">
           <input id ="delete"type="submit" value="&#10006;">
   </form>
</article>

<?php
    }
    ?>
</section>

</body>



</html>


