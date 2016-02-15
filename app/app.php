<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->get("/results", function() use ($app) {
        $my_PingPongGenerator = new PingPongGenerator;
        $pingPongResult = $my_PingPongGenerator->makePingPong($_GET['input_number']);
        return $app['twig']->render('results.html.twig', array('results'=>$pingPongResult));
    });

    return $app;
?>
