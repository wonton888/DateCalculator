<?php

    // DEPENDENCIES
        require_once __DIR__."/../vendor/autoload.php"; // frameworks
        require_once __DIR__."/../src/WeekDayCalculator.php"; // example of filepath to first Object created

    // INITIALIZE COOKIE SESSION

    // INITIALIZE APPLICATION
        $app = new Silex\Application();
        $app->register(new Silex\Provider\TwigServiceProvider(), array(
            'twig.path' => __DIR__."/../views"
        ));
    // ROUTES

        // display index webpage
        $app->get('/', function() use ($app) {

            return $app['twig']->render('index.html.twig');
        });

        $app->get('/results', function() use ($app) {
            $date = new WeekdayCalculator();
            $weekday = $date->findWeekday($_GET['date']);
            return $app['twig']->render('view_results.html.twig', array('weekday' => $weekday));
        });
    return $app;

?>
