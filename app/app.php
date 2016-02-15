<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/QueenGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    // $app->get("/", function() use ($app) {
    //     return $app['twig']->render('home.html.twig');
    // });
    //
    // $app->get("/results", function() use ($app) {
    //     $my_LeetSpeakGenerator = new LeetSpeakGenerator;
    //     $leetSpeakPhrase = $my_LeetSpeakGenerator->makeLeetSpeak($_GET['input_phrase']);
    //     return $app['twig']->render('results.html.twig', array('results'=>$leetSpeakPhrase));
    // });

    return $app;
?>
