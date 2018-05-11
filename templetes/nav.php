
<html>

<nav>
    <div class="topnav" id="wrapper_nav">
      <a href="javascript:void(0);" style="font-size:26px;" class="icon" onclick="myFunction()">&#9776;</a>
            <a class="element_nav"  href="../index.php">Profile</a>
            <a class="element_nav1" href="../templetes/portfolio.php">Portfolio</a>
            <a class="element_nav2" href="../templetes/skills`.php">Skills</a>
            <a class="element_nav3" href="../templetes/activity-images.php">About</a>
            <a class="btn_sign_up"  href="https://firebasestorage.googleapis.com/v0/b/portfolio-b12a0.appspot.com/o/portfolio-images%2FNidennisBE's%20CV%20(Android%20developer).pdf?alt=media&token=a38ab1e7-463a-4769-983b-cdcd9db1a618">Download CV</a>
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
