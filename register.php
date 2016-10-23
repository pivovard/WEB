<!DOCTYPE html>
<html>
    <head>
        <?php include "nav/head.php";?>
    </head>
    <body>
        <?php include "nav/header.php";?>
        <?php include "nav/navbar.php";?>
        
  
        <div class="container-fluid text-center">
            <div class="row content">
    
                <form class="form-horizontal col-sm-10 text-left">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="login">Login:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="login" placeholder="Enter login" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-8"> 
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" required>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-8">
                            <div class="checkbox">
                                <label><input type="checkbox"> Remember me</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" class="btn btn-default">Register</button>
                        </div>
                    </div>
                </form>
      
                <?php include "nav/sidenav.php";?>
            </div>
        </div>

        

        <?php include "nav/footer.php";?>
    </body>
</html>