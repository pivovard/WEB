<!DOCTYPE html>

<?php
$page = "login";
?>

<html>
    <head>
        <?php include "nav/head.php";?>
    </head>
    <body>
        <?php include "nav/header.php";?>
        <?php include "nav/navbar.php";?>
        
  
        <div class="container-fluid text-center">
            <div class="row content">
    
                <form class="form-horizontal col-sm-10 text-left content-odsazeni" action="login.php" method="post">
                    <input type='hidden' name='action' value='login'/>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="login">Login:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="login" name="user[login]" placeholder="Enter login" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-8"> 
                            <input type="password" class="form-control" id="pwd" name="user[pass]" placeholder="Enter password" required>
                        </div>
                    </div>
                    
                    <?php
                    if($action == "login")
                    {
                        echo "
                            <div class='form-group'>
                                <label class='col-sm-offset-2 col-sm-8' style='color:red'>Wrong username or password!</label>
                            </div>";
                    }
                    ?>
                    
                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" class="btn btn-default">Login</button>
                            <a href="register.php" class="btn btn-info" role="button">Register</a>
                        </div>
                    </div>
                </form>
      
                <?php include "nav/sidenav.php";?>
            </div>
        </div>

        

        <?php include "nav/footer.php";?>
    </body>
</html>