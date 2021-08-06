<?php
include_once __DIR__.'./vendor/autoload.php';

        $modulo = Url::getURL( 0 );
 
        if( $modulo == null)
            $modulo = "home";
 
        if( file_exists( "../tiindiko/app/view/routes/" . $modulo . ".php" ) )
            require "../tiindiko/app/view/routes/" . $modulo . ".php";
        else
            require "404.php";
