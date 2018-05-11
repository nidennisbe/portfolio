
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

<ul id="skill">
	<li><span class="bar graphic-design"></span><h3>Graphic Design</h3></li>
	<li><span class="bar html-css"></span><h3>Html // Css</h3></li>
	<li><span class="bar jquery"></span><h3>jQuery // MoTools</h3></li>
	<li><span class="bar wordpress"></span><h3>Wordpress</h3></li>
</ul>
<div name="title" style="border-bottom: solid 1px #6998ba;height:100px"><h1 style="color:#FF5077;padding:35px" ><strong>TOP SKILLS</strong></h1></div>
<section>
        <?php while ($result && $row = mysqli_fetch_assoc($result)) {?>
        	<div class="wrapper">
        				    	<div class="product-img">
        				      		<img src="<?php echo $row['image'];?>" height="350" width="100%">
        				    	</div>
        				    	<div class="product-info">
        						      <div class="product-text">
        							        <h1><?php echo $row['title'];?></h1>
        							        <h2>LAST UPDATED: <?php echo $row['date'];?></h2>
        							        <p><?php echo $row['description'];?> </p>
        						      </div>
        									<div class="product-price-btn">
        											<button type="button" onclick="location.href='review-detail-gaming.php?id=<?php echo $row['id'];?>';">Read more</button>
        									</div>
        				       </div>
          </div>
        <?php }
        				?>
</section>
<?php
      include "footer.php";
?>
</body>
</html>
