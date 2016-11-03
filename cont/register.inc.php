        <div class="container-fluid text-center">
            <div class="row content">
    
                <form class="form-horizontal col-sm-10 text-left content-odsazeni" action="index.php?page=register" method="post">
                    <input type='hidden' name='action' value='register'/>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="login">Login:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="login" name="user[login]" placeholder="Enter login" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name="user[email]" placeholder="Enter email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-8"> 
                            <input type="password" class="form-control" id="pwd" name="user[pass]" placeholder="Enter password" required>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-8">
                            <div class="radio">
                                <label class="radio-inline"><input type="radio" name="user[user]">User</label>
                                <label class="radio-inline"><input type="radio" name="user[user]">Reviewer</label>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                    if($action == "register")
                    {
                        echo "
                            <div class='form-group'>
                                <label class='col-sm-offset-2 col-sm-8' style='color:red'>Registration hasn't been successfull!</label>
                            </div>";
                    }
                    ?>
                    
                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" class="btn btn-info">Register</button>
                        </div>
                    </div>
                </form>
      
                <?php include "nav/sidenav.php";?>
            </div>
        </div>