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
        	$result = mysqli_query($conn, "SELECT * FROM tb_page_ultrabook");
?>
<!doctype html>
<html>
<head>
      <link rel="icon" href="pics/nidennis.jpg">
      <meta charset="utf-8">
      <title>Ultrabooks</title>
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
<div name="title" style="border-bottom: solid 1px #6998ba;height:100px"><h1 style="color:#6998ba;padding:35px" ><strong>ULTRABOOKS REVIEW</strong></h1></div>
<!-- ---------------------------START SECTION------------------------------------------------- -->
<section>
      <div id="content">
            <?php do { ?>
              <div class="wrapper">
                          <div class="product-img">
                              <img src="<?php echo $row['image'];?>" height="420" width="100%">
                          </div>
                          <div class="product-info">
                              <div class="product-text">
                                  <h1><?php echo $row['title'];?></h1>
                                  <h2>latest modified: <?php echo $row['date'];?></h2>
                                  <p><?php echo $row['description'];?> </p>
                              </div>
                              <div class="product-price-btn">
                                  <button type="button" onclick="location.href='review-detail.php?id=<?php echo $row['id'];?>';">Read more</button>
                              </div>
                           </div>
              </div>
             <?php } while ($row = mysqli_fetch_assoc($result)) ?>
</section>
<?php
      include "footer.php";
?>
</body>
</html>
