
<html>

<nav>
    <div class="topnav" id="wrapper_nav">
      <a href="javascript:void(0);" style="font-size:26px;" class="icon" onclick="myFunction()">&#9776;</a>
            <a class="element_nav"  href="../index.php">Profile</a>
            <a class="element_nav1" href="../templetes/ultrabook.php">Portfolio</a>
            <a class="element_nav2" href="../templetes/gaming-laptop.php">Gaming Laptops</a>
            <a class="element_nav3" href="../templetes/about.php">About</a>
            <a class="btn_sign_up"  href="../templetes/sign_in.php">Download CV</a>
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


<script>
       function toggleActiveState() {
           this.classList.toggle('active');
       }
       var btns = document.querySelectorAll('.element_nav');
       [].forEach.call(btns, function(btn) {
         btn.addEventListener('click', toggleActiveState, false);
       });
   </script>
</html>
