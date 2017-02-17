<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Numbers.php";


    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        "twig.path"=>__DIR__.'/../views'
    ));
    $app['debug']=true;
    $app->get('/', function() use ($app) {
        return $app['twig']->render("index.html.twig", array("result"=>null));
    });
    $app->post('/', function() use ($app) {
        return $app['twig']->render("index.html.twig", array("result"=>Numbers::NumbersToWords($_POST['input'])));
    });
    return $app;
?>
