<?php
$page = @$_REQUEST["page"]."";
if($page == ""){
    $page = "index";
}

include_once("inc/settings.php");
include_once("inc/functions.php");
include_once("inc/db_pdo.class.php");
include_once("inc/db.class.php");
include_once("inc/login_go.php");


if(in_array($page, array("index", "about", "contact", "login", "register"))){
    $filename = "cont/".$page.".inc.php";
}
else {
    echo "<h1>404: Page not found!</h1>";
}

$nav = phpWrapperFromFile("nav/navbar.php");
$obsah = phpWrapperFromFile($filename);
        

	// nacist twig - kopie z dokumentace
	require_once 'twig-master/lib/Twig/Autoloader.php';
	Twig_Autoloader::register();
	// cesta k adresari se sablonama - od index.php
	$loader = new Twig_Loader_Filesystem('sablony');
	$twig = new Twig_Environment($loader); // takhle je to bez cache
	// nacist danou sablonu z adresare
	$template = $twig->loadTemplate('sablona.htm');
	
	// render vrati data pro vypis nebo display je vypise
	// v poli jsou data pro vlozeni do sablony
	$template_params = array();
	$template_params["nav"] = $nav;
	$template_params["obsah"] = $obsah;
	echo $template->render($template_params);

$twig->addGlobal('page', $page);


?>