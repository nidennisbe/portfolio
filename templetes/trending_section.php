
<!DOCTYPE html>
<html>
<head>
			<link rel="stylesheet" type="text/css" href="resources/css/card_layout.css"/>
      <link rel="stylesheet" type="text/css" href="resources/css/mobile_version.css"/>
      <meta charset="utf-8">
      <?php include "resources/dbconnector/mysql-connector.php";?>
      <?php  	$result = mysqli_query($conn, "SELECT * FROM tb_page_gaminglaptop WHERE id LIMIT 3");?>
      <title>Top ultrabooks 2017</title>
      <meta name="viewport" content="width=680px">
</head>
<body>

<section>
		  <div name="title" style="background-color:#E95589;height:100px;"><h1 style="color:white;padding:35px;font-size:1.5em;border-radius:4px;" ><strong>Trending</strong></h1></div>
      <br>
<?php while ($result && $row = mysqli_fetch_assoc($result)) {?>
	<div class="wrapper">
				    	<div class="product-img">
				      		<img src="<?php echo $row['image'];?>" height="350" width="100%">
				    	</div>
				    	<div class="product-info">
						      <div class="product-text">
							        <h1><?php echo $row['title'];?></h1>
							        <h2>latest modified: <?php echo $row['date'];?></h2>
							        <p><?php echo $row['description'];?> </p>
						      </div>
									<div class="product-price-btn">
											<button type="button" onclick="location.href='templetes/review-detail-gaming.php?id=<?php echo $row['id'];?>';">Read more</button>
									</div>
				       </div>
  </div>
<?php } ?>
</section>
</body>
</html>
