<!doctype html>
<html>
<head>
    <link rel="icon" href="pics/nidennis.jpg">
    <link rel="stylesheet" type="text/css" href="style/stylesheet.css"/>
    <link rel="stylesheet" type="text/css" href="style/text_effect.css"/>
    <link rel="stylesheet" type="text/css" href="style/mobile_version.css"/>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="width=680px">
    <script src="javascript/slideshow.js"> </script>
</head>
<body>
<?php
      include "header.php";
      include "nav.php";
?>

<center>
    <div class="subscribe_panel">
      <div class="subscribe_wrapper">
              <form class="sub_form">
                    <h1 id="subscribe_title" style=" font-family: 'arial', sans-serif;display:inline;color:grey;">Subscribe with us to get latest review</h1>
                    <input type="email" placeholder="Your email address">
                    <button type="submit" class="button_1" style="font-family: 'arial', sans-serif">Subscribe</button>
              </form>
      </div>
    </div>
<center>
<section class="slideshow-home" style="background-color:#8bc1e9;">
  <div class="w3-content w3-display-container" style="max-width:800px">
<img class="mySlides" src="img_nature_wide.jpg" style="width:100%">
<img class="mySlides" src="img_fjords_wide.jpg" style="width:100%">
<img class="mySlides" src="img_mountains_wide.jpg" style="width:100%">
<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
  <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
  <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
  <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
  <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
  <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
</div>
</div>
          <button type="submit" class="button_1">More detail</button>

</section>

<section id="boxes">
        <div class="container">
                   <h1 class="title_goal">Our missions</h1>
                   <div class="box">
                   <a href="bestultrabook.php"><img src="./pics/goal/laptop_image.jpg"style="width:60%"></a>
                   <h3 class="text-goal-h3">Laptops review</h3>
                   <p>Offer best articles about tech base on our experiences of using those devices</p>
             </div>

             <div class="box">
                   <a href="bestgaminglaptop.php"><img src="./pics/goal/update.jpg"style="width:49%"></a>
                   <h3>Latest Review</h3>
                   <p>Deliver the up-todate technology tending </p>
             </div>
        </div>
</section>

<section class="cateogires_section" style="height:auto;padding-bottom:600px">
             <h1 class="title_goal">Browse review categories</h1>
             <div class=""style="border:solid 1px white;background:black;display: inline-block;">
                       <ul>
                            <a href="bestultrabook.php"style="color:white">Ultrabooks</a>
                            <a href="bestgaminglaptop.php"style="color:white">Gaming Laptops</a>
                       </ul>
              </div>
</section>

<?php
include "trending_section.php";
?>

<!-- ---------------------------END OF SECTION------------------------------------------------- -->
<?php
      include "footer.php";
?>
</body>
</html>
