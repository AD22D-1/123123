<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/css_reset.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/contact.css">
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
    <?php include_once('header.php'); ?>

        <section id="main">
        <div class="form">
    <h1>Let us know what we can do to improve to serve you better</h1>
        <form name="contactform" id="contactform" action="submitcontact.php" method="post">
            <fieldset>
                <br>
                <label for="name">Surname * </label><br>
                <input type="text" name="surname" id="surname" size="20" placeholder="Enter your surname" required><br>
                <div id="first_err"></div>
                <br>
               
                <label for="name">Name * </label><br>
                <input type="text" name="fname" id="name" size="20" placeholder="Enter your name" required><br>
                <div id="name_err"></div>
                <br>
                <label for="email">Email Address * </label><br>
                <input type="text" name="femail" id="email" size="20" placeholder="Enter your email address" required><br>
                <div id="email_err"></div>
                <br>
                <label for="mobile">Contact Number *</label><br>
                <input type="text" name="fmobile" id="mobile" size="20" placeholder="Enter your mobile number" required><br>
                <div id="mobile_err"></div>
                <br>
                <label for="subject">Subject</label><br>
                <input type="text" name="fsubject" id="subject" Size="20" placeholder="Subject" required></textarea><br>
                <br>
                <label for="comments">comments</label><br>
                <textarea id="comments" name="fcomments" rows="7" cols="25"
                    placeholder="Enter your comments here" required></textarea>
                <br>
                <div id="comments_err"></div>
                <input type="submit" id="submitbutton" class="button" value="Submit Form">
                <div id="submission_err"></div>
            </fieldset>
        </form>
        </div>
        </section>
    <?php include_once('footer.php');?>

</body>
</html>