<?php
$page = @$_REQUEST["page"]."";
if($page == ""){
    $page = "index";
}
    
include_once("inc/login_go.php");
?>

<!DOCTYPE html>

<html>
    <head>
        <?php include "nav/head.php";?>
    </head>
    <body>
        
        <?php
        
        include "nav/header.php";
        include "nav/navbar.php";
        
        if(in_array($page, array("index", "about", "contact", "login", "register"))){
            include "cont/".$page.".inc.php";
        }
        else {
            echo "<h1>404: Page not found!</h1>";
        }
        
        include "nav/footer.php";
        ?>
        
    </body>
</html>