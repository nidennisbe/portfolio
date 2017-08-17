<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>sign_in</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="resources/css/stylesheet.css">
    <link rel="stylesheet" href="resources/css/signupstyle.css">
    <link rel="stylesheet" href="resources/css/mobile_version.css">
    <meta name="viewport" content="width=680px">
</head>
<!-- ---------------------------START BODY------------------------------------------------- -->
<body >
    <?php include "templetes/nav.php"?>
<section>
  <div class="form">
    <div class="container">
      <div class="info">
          <h1>SIGN IN</h1>
          <hr>
      </div>
    </div>
      <form class="login-form" action="login_process.php" method="get">
          <input type="email" placeholder="E-mail" name="email"name="email"/>
          <input type="password" placeholder="Password" name="password"name="password"/>
          <button>SIGN IN</button>
  <a href="signup.php">Not having account? </a>
      </form>
    </div>
<script src="js/index.js"></script>
<!-- ---------------------------END BODY------------------------------------------------ -->
</section>

</body>
</html>
