
<html>

<nav>
    <div class="topnav" id="wrapper_nav"style="margin:0">
      <a href="javascript:void(0);" style="font-size:26px;" class="icon" onclick="myFunction()">&#9776;</a>
            <a class="element_nav"  href="index.php">Home</a>
            <a class="element_nav1" href="ultrabook.php">Ultrabooks</a>
            <a class="element_nav2" href="gaming-laptop.php">Gaming Laptops</a>
            <a class="element_nav3" href="about.php">About</a>
            <a class="btn_sign_up"  href="sign_in.php">My Account</a>
      </a>
    </div>
</nav>
<!-- Drop down list -->
<script>
function myFunction() {
    var x = document.getElementById("wrapper_nav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</html>
