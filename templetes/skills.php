
<!doctype html>
<html>
<head>
      <?php include "../resources/dbconnector/mysql-connector.php";?>
      <?php $result = mysqli_query($conn, "SELECT * FROM tb_page_gaminglaptop");?>
      <link rel="icon" href="pics/nidennis.jpg">
      <meta charset="utf-8">
      <title>skills</title>
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
<div name="title" style="border-bottom: solid 1px #6998ba;height:100px"><h1 style="color:black;padding:35px" ><strong>TOP SKILLS</strong></h1></div>
<section>
  <p>Android</p>
  <div class="container">
    <div class="skills html">70%</div>
  </div>

  <p>Java</p>
  <div class="container">
    <div class="skills css">70%</div>
  </div>

  <p>User Interface Design</p>
  <div class="container">
    <div class="skills js">75%</div>
  </div>

  <p>TypeScript</p>
  <div class="container">
    <div class="skills php">60%</div>
  </div>
</section>
<?php
      include "footer.php";
?>
</body>
</html>
