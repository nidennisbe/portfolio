<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style/stylesheet.css"/>
    <link rel="stylesheet" type="text/css" href="style/text_effect.css"/>
    <link rel="stylesheet" type="text/css" href="style/mobile_version.css"/>
    <meta charset="utf-8">
    <title>Homepage</title>
    <meta name="viewport" content="width=680px">
</head>
<body>
<?php
include "header.php";
include "nav.php";
?>
<!-- ---------------------------START SECTION------------------------------------------------- -->
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
        <div class="slideshow-container" style="width=100%;padding-bottom:0">
            <div class="mySlides fade">
              <img src="pics/slideshow/hp.png" style="width:50%">
            <div <a href="index.php"class="text">HP SPECTRE</div>
            </div>
                  <div class="mySlides fade">
                    <img src="pics/slideshow/razerblade.png" style="width:50%">
                  <div class="text">RAZER BLADE 14</div>
                  </div>
                    <div class="mySlides fade">
                      <img src="pics/slideshow/dellxps.png" style="width:50%">
                        <div class="text">DELL XPS13</div>
                    </div>
                      </div>
                         <br>
        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <button type="submit" class="button_1">More detail</button>

        <script src="javascript/slideshow.js"> </script>
		 </section>

     <section id="boxes">
     <div class="container">
       <h1 class="title_goal">SELECT REVIEW CATEGORIES</h1>
     <div class="box">
     <a href="bestultrabook.php"><img src="./pics/ultrabooks/macbook12.png"style="width:75%"></a>
     <h3 class="text-goal-h3">Ultrabooks review</h3>
     </div>

     <div class="box">
     <a href="bestgaminglaptop.php"><img src="./pics/ultrabooks/msi-gt80-2qc.png"style="width:55%"></a>
     <h3>Gaming laptops review</h3>
     </div>
     </div>
     </section>

    <section>
            <h3 style="font-size:3em">TOP GAMING LAPTOPS</h3>
            <center>
            <table class="grid_table"width="300px" style="margin-bottom:2em;" cellspacing="1" >
                    <tr>
                        <td> <a  class="items_home"href="asus-laptops.html"> <img src="pic_home/topselling/ASUS-G550JX.png" width="240" height="166" alt="" /><center><h3><blink>Click to see review</blink></h3></td>
                        <td> <a  class="items_home"href="asus-laptops.html"><img src="pic_home/topselling/ASUS-ROG-G751JL.png" width="240" height="166" alt="" /><center><h3>Click to see review</h3></td>
                    </tr>

                    <tr>
                        <td> <a  class="items_home"href="msi-laptops.html"><img src="pic_home/topselling/msi-gt80-2qc.png" width="240" height="166" alt="" /><center><h3>Click to see review</h3></td>
                        <td> <a  class="items_home"href="lenovo-laptops.html"> <img src="pic_home/topselling/lenovo-laptop-y50 15'inch-main.png" width="240" height="166" alt="" /><center><h3>Click to see review</h3></td>
                    </tr>

					          <tr>
                         <td> <a  class="items_home"href="asus-laptops.html"> <img src="pic_home/topselling/asus-rog-g751.png" width="240" height="166" alt="" /><center><h3>Click to see review</h3></td>
                         <td> <a  class="items_home"href="laptops.html"> <img src="pic_alienwares/aw154ktouch.png" width="240 height="166" alt="" /><center><h3>Click to see review</h3></td>
                    </tr>

					          <tr>
                        <td> <a class="items_home" href="lenovo-laptops.php"> <img src="pic_lenovo/lenovo-y510p.png" width="240" height="166" alt="" /> <center><h3>Click to see review</h3></td>
                        <td> <a class="items_home" href="msi-laptops.php"> <img src="pic_home/topselling/msi-gs70-2qd.png" width="240" height="166" alt="" /><center><h3>Click to see review</h3></td>
                    </tr>
   </section>


<!-- ---------------------------END OF SECTION------------------------------------------------- -->
<?php
include "footer.php";
?>
</body>
</html>
