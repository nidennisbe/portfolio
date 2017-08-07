<!doctype html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style/stylesheet.css" />
  <link rel="stylesheet" type="text/css" href="style/mobile_version.css"/>
  <meta charset="utf-8">
  <title>Best Ultrabook </title>
  <meta name="viewport" content="width=680px">
</head>
<body>
  <?php
  	$db = mysqli_connect("localhost", "root", "Benidennis9", "webdb");
  	$msg = "";

  	if (isset($_POST['upload'])) {

  	}
  	$result = mysqli_query($db, "SELECT * FROM tb_top_stories");
  ?>
  <?php
    include "header.php";
    include "nav.php";
  ?>
<div name="title" style="background-color:#9ACD32;height:100px"><h1 style="color:white;padding:35px" ><strong>Top 5 Ultrabooks</strong></h1></div>
<section>
  <h3>This is the page of the best ultrabook laptops 2017</h3>
                 <?php
                 $dir= glob('pics/ultrabooks/{*.png,*.jpg}',GLOB_BRACE);
                 foreach ($dir as $key => $value){
                  ?>
                     <div class="card">
                       <a href  <?php echo $value;?> "data-fancybox="pics" data-caption="My caption"<?php echo $value;  ?>>
                         <img src="<?php echo $value; ?>" alt="<?php echo $value;  ?>">
                       </a>
                         <h3>MSI GS 72</h3>
                         <p>The 14-inch IdeaPad 720S weighs 3.3 pounds and measures 0.6 inches thick, which is thinner and lighter than the 15-inch Asus VivoBook S510 (3.6 pounds, 0.7 inches). The 13-inch Samsung Notebook 9 (1.8 pounds, 0.6 inches) and 13-inch Dell XPS 13 (2.7 pounds, 0.6 inches) are predictably lighter.
                          While it may be thin and light, the IdeaPad doesn't skimp on ports. Its dual USB 3.0 connectors are split between its sides; its HDMI-out, SD memory reader and Thunderbolt 3 port are on its right, and its headphone jack is on the left.</p>
                     </div>
                <?php
                }
                ?>
  <?php
    include "footer.php";
  ?>

</body>
</html>
