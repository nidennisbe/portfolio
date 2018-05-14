<!doctype html>
<html>
<head>
  <link href="../resources/css/bootstrap.min.css" rel="stylesheet">
  <link href="../resources/css/bootstrap-theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../resources/css/stylesheet.css"/>
    <link rel="stylesheet" type="text/css" href="../resources/css/card_layout.css"/>
    <link rel="stylesheet" type="text/css" href="../resources/css/text_effect.css"/>
    <link rel="stylesheet" type="text/css" href="../resources/css/mobile_version.css"/>
    <meta charset="utf-8">
    <title>Review detail</title>
    <meta name="viewport" content="width=680px">
<?php
    include "../resources/dbconnector/mysql-connector.php";
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM tb_portfolio WHERE id=$id");
?>
</head>
<body>
<!-- facebook comment -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.async=true;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1953263311555456";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<?php
      include "../templetes/nav.php";
?>

<center>
<div name="title" style="border-bottom: solid 1px #c8213a;height:100px;float:left;"><h1 style="color:black;padding:35px" ><strong>Detail</strong></h1></div>
<section>
            <div>
              <?php while ($row = mysqli_fetch_assoc($result))  { ?>
                    <img class="img-detail" style="height:auto" src="<?php echo $row['imageUrl'];?>" >
                    <h3 id="h3-title-item"><?php echo $row['title'];?></h3> <p>PLATFORM: <?php echo $row['platform'];?></p>
                    <hr>
                    <p id="p-desc-item"><?php echo $row['description'];?></p>
                    </div>
              <?php } ?>
              <div class="fb-comments"style="font-weight:bold;font-size:1.2em;float:left;margin-left:10%;margin-top:5%;margin-bottom:3%; box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);"
              data-href="http://iotech.herokuapp.com/review-detail.php?id=<?php echo $id?>" data-numposts="4" mobile="auto-detech"></div>
</section>
<?php
      include "../templetes/footer.php";
?>
</body>
</html>
