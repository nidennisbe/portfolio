<?php
	$db = mysqli_connect("localhost", "root", "Benidennis9", "webdb");
	$result = mysqli_query($db, "SELECT * FROM tb_page_gaminglaptop");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Best Gaming Laptops</title>
<link rel="stylesheet" type="text/css" href="style/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="style/card_layout.css" />
<link rel="stylesheet" type="text/css" href="style/mobile_version.css"/>
<link rel="stylesheet" type="text/css" href="style/text_effect.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<meta name="viewport" content="width=680px">
</head>

<body>
<?php
include "header.php";
include "nav.php";
?>
<div name="title" style="border-bottom: solid 1px #6998ba;height:100px"><h1 style="color:#6998ba;padding:35px" ><strong>GAMING LAPTOPS</strong></h1></div>
<!-- ---------------------------START SECTION------------------------------------------------- -->

	<section>
				<div id="content">
							<?php
								while ($row = mysqli_fetch_array($result)) {
									echo "<div id='img_div'><a href='".$row['url']."' </a>";
									echo "<img src='".$row['image']."' >";
							    echo "<h3 id='h3-title-item'>".$row['title']."</h3>";
							    echo "<div >";
									echo "<p id='p-desc-item'>".$row['description']."<p>";
								echo "</div>";
						echo "</div>";
								}
							?>
<?php
include "footer.php";
?>
</body>



</html>
