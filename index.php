<?php
include_once __DIR__ . '/vendor/autoload.php';

$modulo = Url::getURL(0);

if ($modulo == null)
    $modulo = "home";

if (file_exists("app/view/routes/" . $modulo . ".php"))
    require "app/view/routes/" . $modulo . ".php";

elseif (file_exists("app/view/cliente/" . $modulo . ".php"))
    require "app/view/cliente/" . $modulo . ".php";

elseif (file_exists("app/view/parceiro/" . $modulo . ".php"))
    require "app/view/parceiro/" . $modulo . ".php";

elseif (file_exists("app/view/profissional/" . $modulo . ".php"))
    require "app/view/profissional/" . $modulo . ".php";

elseif (file_exists("app/view/administrativo/" . $modulo . ".php"))
    require "app/view/administrativo/" . $modulo . ".php";

else    
require "404.php";
//var_dump($url = $_GET['url'])?? 'home';
//nclude "/app/view/routes/{$url}.php";