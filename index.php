<!doctype html>
<html>
<head>
    <link rel="icon" href="resources/pics/nidennis.jpg">
    <link rel="stylesheet" type="text/css" href="resources/css/stylesheet.css"/>
    <link rel="stylesheet" type="text/css" href="resources/css/text_effect.css"/>
    <link rel="stylesheet" type="text/css" href="resources/css/mobile_version.css"/>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="width=680px">
</head>
<body>
<?php
      include "templetes/nav.php";
?>

<section id="boxes">
            <div class="container">
                   <h1 class="title_goal">Personal Details</h1>
                   <div class="box">
                         <a href="templetes/ultrabook.php"><img class="profile-image" src="./resources/pics/nidennis.jpg"style="width:250px;height:auto"></a>
                         <ul class="social-icons">
                                <h1 style=" font-family: 'impact', sans-serif;">FOLLOW US</h1>
                                <li><a href="http://www.facebook.com" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
                                <li><a href="http://www.plus.google.com" class="social-icon"> <i class="fa fa-google"></i></a></li>
                                <li><a href="http://www.twitter.com" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
                                <li><a href="http://www.youtube.com" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
                                <li><a href="http://www.instagram.com" class="social-icon"> <i class="fa fa-instagram"></i></a></li>
                               <h5 style=" font-family: sans-serif;font-size:20px;color:white">&copy Copyright 2017 | IO Tech Review | All rights reserved</h5>
                          </ul>
                   </div>
                   <div class="box">
                     <h3 class="text-goal-h3">Summary</h3>
                     <p style="text-align: justify">I have a few years of experience in building native Android, desktop and Web application. Beside that I really love designing UI for mobile applications. I enjoy working with technologies as have a strong appreciation for its ability to provide solutions to people and businesses. I can’t wait to learn the new technologies that come out everyday.</p>
                   </div>
           </div>
</section>
<?php
      include "templetes/trending_section.php";
?>

<?php
      include "templetes/footer.php";
?>
</body>
</html>
