<?php
  session_start();

require "core/functions.php";
require "model/bdd.php";

define('WEBROOT', dirname(__FILE__));
define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']));
define('ROOT', dirname(WEBROOT));
define('DS', DIRECTORY_SEPARATOR);
define('CORE',ROOT.DS.'core');

if (isset($_SESSION['ban']) AND $_SESSION['ban'] == 1)
{
    $page = "ban";
}
else {
    if (!isset($_GET['p']) || $_GET['p'] == "") {
        $page = $_GET["p"] = 'login';
    } else {
        if (!file_exists("controller/" . $_GET['p'] . ".php")) {
            $page = $_GET['p'] = '404';
        } else {
            $page = $_GET['p'];
        }
    }
}

ob_start();//permet de ne plus renvoyer de contenu au navigateur
    require "controller/www.blog.portfolio-vcotini.com/".$page.".php";
    $content = ob_get_contents();//permet de recuperer le contenu executé depuis ob_start
ob_end_clean();

require "template.php"
?>
