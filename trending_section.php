
<?php
	$db = mysqli_connect("localhost", "root", "Benidennis9", "webdb");
	$result = mysqli_query($db, "SELECT * FROM tb_top_stories");
?>

<!DOCTYPE html>
<html>
<head>
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
  <div name="title" style="background-color:#89b724;height:100px;"><h1 style="color:white;padding:35px" ><strong>Top Ultrabooks</strong></h1></div>
	<section>
				<div id="content">
							<?php
								while ($row = mysqli_fetch_array($result)) {
									echo "<div id='img_div'><a href='".$row['url']."' </a>";
									echo "<img src='".$row['image']."' >";
							    echo "<h3>".$row['title']."</h3>";
							    echo "<div class='desc'>";
									echo "<p>".$row['description']."<p>";
								echo "</div>";
						echo "</div>";
								}
							?>
<?php
include "footer.php";
?>
</div>
</body>
</html>
