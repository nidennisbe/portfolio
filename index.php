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
      include "templetes/header.php";
      include "templetes/nav.php";
?>


<section id="boxes">
            <div class="container">
                   <h1 class="title_goal">Personal Details</h1>
                   <div class="box">
                         <a href="templetes/ultrabook.php"><img class="profile-image" src="./resources/pics/nidennis.jpg"style="width:250px;height:auto"></a>
                         <h3 class="text-goal-h3">Summary</h3>
                         <p>I have a few years of experience in building native Android, desktop and Web application. Beside that I really love designing UI for mobile applications. I enjoy working with technologies as have a strong appreciation for its ability to provide solutions to people and businesses. I can’t wait to learn the new technologies that come out everyday.</p>
                   </div>
                   <div class="box">
                         <a href="templetes/gaminglaptop.php"><img src="./resources/pics/goal/update.jpg"style="width:500px;height:auto"></a>
                         <h3>Latest Review</h3>
                         <p>Deliver up-to-date technology and accurate information </p>
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
