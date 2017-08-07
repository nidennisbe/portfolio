<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = $url["us-cdbr-iron-east-05.cleardb.net"];
$username = $url["be9d4142c17943"];
$password = $url["9986cb1b"];
$db = substr($url["heroku_333cefb0b246c8d"], 1);

$mysqli = new mysqli($server, $username, $password, $db);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_errno);
    
}

$result = $conn->query("select * FROM tb_page_ultrabook");
}
	
	
	
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
  <div name="title" style="border-bottom: solid 1px #6998ba;height:100px;"><h1 style="color:#6998ba;padding:35px" ><strong>ULTRABOOKS</strong></h1></div>
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
