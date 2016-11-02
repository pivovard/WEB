<?php
session_start();

$key = "conference_system";

if(!isset($_SESSION[$key]))
{
    $_SESSION[$key] = array();
}


$action = @$_POST["action"]."";
$user = @$_POST["user"];


if($action == "login")
{
    if(trim($user["login"]) == "admin" && $user["pass"] == "admin")
    {
        $_SESSION[$key]["login"] = $user["login"];
        $_SESSION[$key]["rights"] = "admin";
        header("Location:index.php");
    }
}

if($action == "logout")
{
    session_unset();
    header("Location:index.php");
}

if($action == "register")
{
    $_SESSION[$key]["login"] = $user["login"];
    header("Location:index.php");
}



function isLogged()
{
    $key = "conference_system";
    
    if(isset($_SESSION[$key]["login"]))
    {
        return true;
    }
    else
    {
        return false;
    }
}

?>

