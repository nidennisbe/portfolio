
<!doctype html>
<html>
<head>
      <?php include "../resources/dbconnector/mysql-connector.php";?>
      <?php $result = mysqli_query($conn, "SELECT * FROM tb_page_gaminglaptop");?>
      <link rel="icon" href="pics/nidennis.jpg">
      <meta charset="utf-8">
      <title>Gaming Laptops</title>
      <link rel="stylesheet" type="text/css" href="../resources/css/stylesheet.css" />
      <link rel="stylesheet" type="text/css" href="../resources/css/card_layout.css" />
      <link rel="stylesheet" type="text/css" href="../resources/css/mobile_version.css"/>
      <link rel="stylesheet" type="text/css" href="../resources/css/text_effect.css"/>
          <link rel="stylesheet" type="text/css" href="../resources/css/skills.css"/>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <meta name="viewport" content="width=680px">
</head>
<body>
<?php
      include "nav.php";
?>
<div name="title" style="border-bottom: solid 1px #6998ba;height:100px"><h1 style="color:#FF5077;padding:35px" ><strong>TOP SKILLS</strong></h1></div>
<section>
  <ul id="skill">
    <li><span class="bar graphic-design"></span><h3>Graphic Design</h3></li>
    <li><span class="bar html-css"></span><h3>Html // Css</h3></li>
    <li><span class="bar jquery"></span><h3>jQuery // MoTools</h3></li>
    <li><span class="bar wordpress"></span><h3>Wordpress</h3></li>
  </ul>
</section>
<?php
      include "footer.php";
?>
</body>
</html>
