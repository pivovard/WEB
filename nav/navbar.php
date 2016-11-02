<?php
include_once("inc/login_go.php");
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Company</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          
          <?php
                if($page == "index")
                {
                    echo "<li class='active'><a href='index.php'>Home</a></li>";
                    echo "<li><a href='about.php'>About</a></li>";
                    echo "<li><a href='contact.php'>Contact</a></li>";
                }
                if($page == "about")
                {
                    echo "<li><a href='index.php'>Home</a></li>";
                    echo "<li class='active'><a href='about.php'>About</a></li>";
                    echo "<li><a href='contact.php'>Contact</a></li>";
                }
                if($page == "contact")
                {
                    echo "<li><a href='index.php'>Home</a></li>";
                    echo "<li><a href='about.php'>About</a></li>";
                    echo "<li class='active'><a href='contact.php'>Contact</a></li>";
                }
                if($page == "login" || $page == "register" || $page == "article")
                {
                    echo "<li><a href='index.php'>Home</a></li>";
                    echo "<li><a href='about.php'>About</a></li>";
                    echo "<li><a href='contact.php'>Contact</a></li>";
                }
            
            if(isLogged())
            {
                if($page == "article")
                {
                    echo "<li class='active'><a href='#'>Articles</a></li>";
                }
                else
                {
                    echo "<li><a href='#'>Articles</a></li>";
                }
            }
          
          ?>
          
          
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
          
          <?php
          
            if(isLogged())
            {
                echo "<p class='navbar-text'>Logged as: <b>". $_SESSION["conference_system"]["login"]."</b></p>";
                echo "<li><form class='form-inline' action='index.php' method='post'><input type='hidden' name='action' value='logout'/>";
                echo "<button class='btn' type='submit'><span class='glyphicon glyphicon-log-out'></span> Logout</a>";
                echo "</form></li>";
            }
            else
            {
                if($page == "register")
                {
                    echo "<li class='active'><a href='register.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>";
                }
                else
                {
                    echo "<li><a href='register.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>";
                }
          
                if($page == "login")
                {
                    echo "<li class='active'><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                }
                else
                {
                    echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                }
            }
          
          ?>
          
      </ul>
    </div>
  </div>
</nav>