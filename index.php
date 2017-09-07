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
<center>
    <div class="subscribe_panel">
      <div class="subscribe_wrapper">
              <form class="sub_form">
                    <h1 id="subscribe_title" style=" font-family: 'arial', sans-serif;display:inline;color:grey;">Subscribe with us to get latest review</h1>
                    <input type="email" placeholder="Your email address">
                    <button class="subscribe" type="submit" style="font-family: 'arial', sans-serif">Subscribe</button>
              </form>
      </div>
    </div>
<center>
<section class="slideshow-home" style="background-color:#F9A05C;">
  <center>
  <div class="w3-content w3-display-container" style="margin:0 auto;">
        <img class="mySlides" src="resources/pics/slideshow/razerblade.png" style="width:550px; height: auto;">
        <img class="mySlides" src="resources/pics/slideshow/dellxps.png" style="width:550px; height: auto;">
        <img class="mySlides" src="resources/pics/slideshow/hp.png" style="width:550px; height: auto;">
        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
  </div>
        <script src="resources/js/slideshow.js"> </script>

</section>
<section id="boxes">
            <div class="container">
                   <h1 class="title_goal">Our missions</h1>
                   <div class="box">
                         <a href="templetes/ultrabook.php"><img src="./resources/pics/goal/laptop_image.jpg"style="width:550px;height:auto"></a>
                         <h3 class="text-goal-h3">Laptops review</h3>
                         <p>Offer best articles about tech base on our experiences of using those devices</p>
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
