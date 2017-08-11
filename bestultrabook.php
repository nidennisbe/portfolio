<?php

//$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = "h40lg7qyub2umdvb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "t8mvn41zc3dvlxhu";
$password = "fhzr9pbe4y18yxlz";
$db = "k6zc9jmzecfdzsgk";

$conn = mysqli_connect($server, $username, $password, $db);


if ($conn->connect_error) {
    //If failed to connect
    die("Connection failed: " . $conn->connect_error);
}

	$result = mysqli_query($conn, "SELECT * FROM tb_page_ultrabook");
?>

<!DOCTYPE html>
<html>
<head>
      <link rel="icon" href="pics/nidennis.jpg">
			<link rel="stylesheet" type="text/css" href="style/card_layout.css"/>
      <link rel="stylesheet" type="text/css" href="style/stylesheet.css"/>
      <link rel="stylesheet" type="text/css" href="style/text_effect.css"/>
      <link rel="stylesheet" type="text/css" href="style/mobile_version.css"/>
      <meta charset="utf-8">
      <title>Top ultrabooks 2017</title>
      <meta name="viewport" content="width=680px">
</head>
<body>
  <?php
  include "header.php";
  include "nav.php";
  ?>
  <div name="title" style="border-bottom: solid 1px #6998ba;height:100px;"><h1 style="color:#6998ba;padding:35px" ><strong>ULTRABOOKS REVIEW</strong></h1></div>
	<section>
				<div id="content">
							<?php do { ?>
									<div id="img_div"><a href="review-detail.php?id=<?php echo $row['id'];?>">
                      <p id="p-date-item">latest modified: <?php echo $row['date'];?></p>
    									<img src="<?php echo $row['image'];?>" >
    							    <h3 id="h3-title-item"><?php echo $row['title'];?></h3>
    									<p id="p-desc-item"><?php echo $row['description'];?><p>
						      </div>
          <?php } while ($row = mysqli_fetch_array($result)) ?>
<?php
include "footer.php";
?>
</body>
</html>
