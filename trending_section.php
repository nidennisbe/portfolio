<?php
        $server = "h40lg7qyub2umdvb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $username = "t8mvn41zc3dvlxhu";
        $password = "fhzr9pbe4y18yxlz";
        $db = "k6zc9jmzecfdzsgk";
        $conn = mysqli_connect($server, $username, $password, $db);

        if ($conn->connect_error) {
            //If failed to connect
            die("Connection failed: " . $conn->connect_error);
        }
        	$result = mysqli_query($conn, "SELECT * FROM tb_page_gaminglaptop");
?>
<!DOCTYPE html>
<html>
<head>

			<link rel="stylesheet" type="text/css" href="style/card_layout-grid.css"/>
      <link rel="stylesheet" type="text/css" href="style/mobile_version.css"/>
      <meta charset="utf-8">
      <title>Top ultrabooks 2017</title>
      <meta name="viewport" content="width=680px">
</head>
<body>
  <div name="title" style="background-color:#89b724;height:100px;"><h1 style="color:white;padding:35px" ><strong>Top Ultrabooks</strong></h1></div>
	<section>
				<div id="content">
							<?php do { ?>

  <div class="wrapper">
    <div class="product-img">
      <img src="<?php echo $row['image'];?>" height="420" width="327">
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1><?php echo $row['title'];?></h1>
        <h2>latest modified: <?php echo $row['date'];?></h2>
        <p><?php echo $row['description'];?> </p>
      </div>
      <div class="product-price-btn">
        <button type="button">Read more</button>
      </div>
    </div>
  </div>

          <?php }
					if ($row=mssql_fetch_assoc($result) > 0) {
					while ($result && $row = mysqli_fetch_assoc($result)) ?>
					
        </section>
</div>
</body>
</html>
