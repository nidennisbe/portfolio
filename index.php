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
<body >
<?php
      include "templetes/nav.php";
?>

<section id="boxes" class="header_wrapper " style="background: linear-gradient(to right, white   , #ffffff)">
            <div class="container">

                   <div class="box">
                      <h1 class="title_goal">HELLO, I'M NIDENNIS</h1>
                         <a href="templetes/ultrabook.php"><img class="profile-image" src="./resources/pics/profile1.jpeg"style="width:250px;height:auto"></a>
                           <h3 class="title_goal">Mobile Developer | UI Designer</h3>

                         <ul class="social-icons">
                                <li> <a href="tel:022-025-8124"><img style="width: 35px; height:auto" src="./resources/pics/icon-phone.png" /></a></li>
                                <li><a href="https://www.facebook.com/nidennisbe" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://github.com/nidennisbe" class="social-icon"> <i class="fa fa-github"></i></a></li>
                                <li><a href="https://www.youtube.com/user/nidennisbe" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
                                <li><a href="https://www.instagram.com/dev_nidennisbe/" class="social-icon"> <i class="fa fa-instagram"></i></a></li>

                          </ul>
                            <img src="./resources/pics/signature.png"style="width:250px"></a>
                   </div>

                   <div class="box" >
                     <h3 class="text-goal-h3">Summary</h3>
                    <p id="text-summary"style="text-align: justify">I have a few years of experience in building native Android, desktop and Web application. Beside that I really love designing UI for mobile applications. I enjoy working with technologies as have a strong appreciation for its ability to provide solutions to people and businesses. I can’t wait to learn the new technologies that come out everyday.</p>
                    <h1 class="title_goal">Preview</h1>
                    <img src="./resources/pics/phone.png"style="width:250px"></a>
                    <img src="./resources/pics/phone1.png"style="width:250px;height:auto"></a>
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
