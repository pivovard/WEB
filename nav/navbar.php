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
                    echo "<li><a href='index.php?page=about'>About</a></li>";
                    echo "<li><a href='index.php?page=contact'>Contact</a></li>";
                }
                else if($page == "about")
                {
                    echo "<li><a href='index.php'>Home</a></li>";
                    echo "<li class='active'><a href='index.php?page=about'>About</a></li>";
                    echo "<li><a href='index.php?page=contact'>Contact</a></li>";
                }
                else if($page == "contact")
                {
                    echo "<li><a href='index.php'>Home</a></li>";
                    echo "<li><a href='index.php?page=about'>About</a></li>";
                    echo "<li class='active'><a href='index.php?page=contact'>Contact</a></li>";
                }
                //if($page == "login" || $page == "register" || $page == "article")
                else
                {
                    echo "<li><a href='index.php'>Home</a></li>";
                    echo "<li><a href='index.php?page=about'>About</a></li>";
                    echo "<li><a href='index.php?page=contact'>Contact</a></li>";
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
                echo "<li><a href='index.php?action=logout'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";
            }
            else
            {
                if($page == "login")
                {
                    echo "<li class='active'><a href='index.php?page=login'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                }
                else
                {
                    echo "<li><a href='index.php?page=login'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                }
                if($page == "register")
                {
                    echo "<li class='active'><a href='index.php?page=register'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>";
                }
                else
                {
                    echo "<li><a href='index.php?page=register'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>";
                }
            }
          
          ?>
          
      </ul>
    </div>
  </div>
</nav>